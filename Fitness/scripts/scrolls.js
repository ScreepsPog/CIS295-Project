// This is completely optional, but this is just an alternative of using href and having the URL change based on the tag. This prevents that while doing the same function.
document.querySelector('[data-scroll="top"]').addEventListener('click', (e) => {
    e.preventDefault(); // Prevent default anchor behavior
    window.scrollTo({ top: 0, behavior: 'smooth' });
});