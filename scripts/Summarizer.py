import os
import json
import requests
from bs4 import BeautifulSoup
from tqdm import tqdm

APPARATUS_DIR = os.path.join(os.path.dirname(__file__), 'apparatuses')
OUTPUT_FILE = os.path.join(os.path.dirname(__file__), 'summarized_apparatuses.json')
OLLAMA_API_URL = 'http://localhost:11434/api/generate'
MODEL = "llama3.1"

def extract_text_from_html(file_path):
    with open(file_path, 'r', encoding='utf-8') as f:
        soup = BeautifulSoup(f, 'html.parser')

    main_content = soup.find("main")

    if main_content:
        return main_content.get_text(separator="\n", strip=True)
    
    return soup.get_text(separator=" ", strip=True)

def summarize_text(text):
    prompt = f"""
    You are an expert in Victorian literature.

    Write a detailed scholarly summary of the following apparatus
    text related to the works of John Ruskin.

    Requirements:
    - 150 word limit
    - Explain the key themes and arguments
    - Maintain academic tone
    - Mention the work(s) of John Ruskin discussed and details about when and where they were crafted and published
    - Include any relevant historical context or connections to Ruskin's broader oeuvre
    - Do not use words like "This apparatus" or "The apparatus text" or "The text" or "This text" or "The following text" or "The following apparatus" or "This following text" or "This following apparatus"

    TEXT:
    {text}
    """    
    for _ in range(3):
        try:
            response = requests.post(
                OLLAMA_API_URL,
                json={
                    "model": MODEL,
                    "prompt": prompt,
                    "stream": False
                }
            )

            if response.status_code == 200:
                return response.json()["response"].strip()

        except Exception as e:
            print("Retrying...", e)
    return ""
    
summaries = {}
files = [f for f in os.listdir(APPARATUS_DIR) if f.endswith('.html')]
for file in tqdm(files, desc="Summarizing apparatuses"):
    file_path = os.path.join(APPARATUS_DIR, file)
    text = extract_text_from_html(file_path)
    summary = summarize_text(text)
    summaries[file] = summary

with open(OUTPUT_FILE, 'w', encoding='utf-8') as f:
    json.dump(summaries, f, indent=2, ensure_ascii=False)

print(f"Summarization complete. Results saved to {OUTPUT_FILE}.")