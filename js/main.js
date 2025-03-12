const toggleBtn = document.querySelector('.navbar_toogleBtn');
const menu = document.querySelector('.navbar_menu');

toggleBtn. addEventListener('click', () => {
    menu.classList.toggle('active');
});

<script>
  function toggleMenu() {
      const navLinks = document.querySelector('.nav-links');
      navLinks.style.display = navLinks.style.display === 'flex' ? 'none' : 'flex';
  }

  function toggleDropdown(event) {
      event.preventDefault(); // Prevent link from redirecting
      const dropdownMenu = event.target.nextElementSibling;
      dropdownMenu.style.display = dropdownMenu.style.display === 'block' ? 'none' : 'block';
  }
</script>