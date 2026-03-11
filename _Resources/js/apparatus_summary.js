document.addEventListener('DOMContentLoaded', async function () {
  if (window.__RUSKIN_SUMMARY_INSERTED__) return;
  window.__RUSKIN_SUMMARY_INSERTED__ = true;

  const path = window.location.pathname;

  if (!path.startsWith('/apparatuses/')) return;

  const slug = (path.split('/')[2] || '') + '.html';

  try {
    const response = await fetch('/gen/_xml/_Completed/summarized_apparatuses.json');

    if (!response.ok) {
      console.error('Could not load summary JSON');
      return;
    }

    const summaries = await response.json();
    const summary = summaries[slug];

    if (!summary) {
      console.warn('No summary for:', slug);
      return;
    }

    if (document.querySelector('#apparatus-summary')) return;

    const box = document.createElement('div');
    box.id = 'apparatus-summary';
    box.className = 'apparatus-summary';

    box.innerHTML = `
      <h3>Summary</h3>
      <p>${summary}</p>
    `;

    // Find the FIRST valid page title only
    const target =
      document.querySelector('#top.page-title') || document.querySelector('.page-title');

    if (!target) return;

    target.insertAdjacentElement('afterend', box);
  } catch (err) {
    console.error('Summary load error:', err);
  }
});
