export function headerToggle() {
    const header = document.getElementById("header");
    if (header) {
        const headerButton = document.getElementById('header-button');
        headerButton.addEventListener('click', () => {
            header.classList.toggle('w-20');
            header.classList.toggle('w-64');
        })
    }
}
