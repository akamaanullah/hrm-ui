document.addEventListener('DOMContentLoaded', () => {
    const viewButtons = document.querySelectorAll('.attendance-view-toggle');
    const viewTargets = document.querySelectorAll('[data-view-target]');

    function setActiveView(view) {
        viewButtons.forEach(btn => {
            const isActive = btn.dataset.view === view;
            btn.classList.toggle('active', isActive);
            btn.setAttribute('aria-pressed', isActive);
        });

        viewTargets.forEach(target => {
            const isMatch = target.dataset.viewTarget === view;
            target.classList.toggle('is-hidden', !isMatch);
        });
    }

    viewButtons.forEach(btn => {
        btn.addEventListener('click', () => setActiveView(btn.dataset.view));
    });

    // initialise default view
    setActiveView('cards');
});
