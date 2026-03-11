document.addEventListener('DOMContentLoaded', async function () {
  const path = window.location.pathname;

  // Only run on apparatus pages
  if (!path.startsWith('/apparatuses/')) return;

  // Prevent duplicates
  if (document.getElementById('apparatus-summary')) return;

  const slug = (path.split('/')[2] || '') + '.html';

  try {
    const response = await fetch('/gen/_xml/_Completed/summarized_apparatuses.json');
    const summaries = await response.json();

    const summary = summaries[slug];

    if (!summary) {
      console.warn('No summary for:', slug);
      return;
    }

    const box = document.createElement('div');
    box.id = 'apparatus-summary';
    box.className = 'apparatus-summary';

    box.innerHTML = `
      <h3>Summary</h3>
      <p>${summary}</p>
    `;

    let target = null;

    const titleText = document.querySelector('.title-text');
    if (titleText) {
      target = titleText.closest('.page-title');
    }

    if (!target) {
      const pageTitle = document.querySelector('.page-title');
      if (pageTitle) {
        target = pageTitle;
      }
    }

    if (!target) return;

    target.insertAdjacentElement('afterend', box);
  } catch (err) {
    console.error('Summary load error:', err);
  }
});
