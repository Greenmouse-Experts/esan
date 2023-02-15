// Get DOM Elements
const mod = document.querySelector('#my-modal');
const closeBtn = document.querySelector('.close');

// Events
closeBtn.addEventListener('click', closeModal);

setTimeout(() => {
    mod.style.display = 'block';
}, 9000);

// Close
function closeModal() {
  mod.style.display = 'none';
}
