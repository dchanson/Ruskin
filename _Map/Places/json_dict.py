import json
import xmltodict
import sys

def convert_to_json(xml_path, json_output_path, indent=4):
    with open(xml_path, 'r', encoding='utf-8') as xml_file:
        xml_content = xml_file.read()

    doc = xmltodict.parse(xml_content)

    # TEI namespace-safe extraction
    tei = doc.get("TEI") or doc.get("tei:TEI") or list(doc.values())[0]

    text = tei.get("text")
    if not text:
        raise ValueError("No <text> element found in TEI XML.")

    body = text.get("body")
    if not body:
        raise ValueError("No <body> element found in TEI XML.")

    # Convert dict → JSON string
    json_str = json.dumps(body, indent=indent, ensure_ascii=False)

    # Write to file
    with open(json_output_path, "w", encoding="utf-8") as out:
        out.write(json_str)

    print(f"JSON created: {json_output_path}")


if __name__ == "__main__":
    if len(sys.argv) < 3:
        print("Usage: python xml_to_body_json.py input.xml output.json")
        sys.exit(1)

    xml_file = sys.argv[1]
    json_file = sys.argv[2]

    convert_to_json(xml_file, json_file)
