document.addEventListener('DOMContentLoaded', function () {
  const navToggle = document.getElementById('mobile-nav-toggle');
  const navDrawer = document.getElementById('mobile-nav-drawer');
  const drawerOverlay = document.getElementById('mobile-drawer-overlay');
  const closeDrawer = document.getElementById('mobile-nav-close');

  function openMenu() {
    if (navDrawer) navDrawer.classList.add('open');
    if (drawerOverlay) drawerOverlay.classList.add('active');
    document.body.style.overflow = 'hidden';
  }

  function closeMenu() {
    if (navDrawer) navDrawer.classList.remove('open');
    if (drawerOverlay) drawerOverlay.classList.remove('active');
    document.body.style.overflow = '';
  }

  if (navToggle) navToggle.addEventListener('click', openMenu);
  if (closeDrawer) closeDrawer.addEventListener('click', closeMenu);
  if (drawerOverlay) drawerOverlay.addEventListener('click', closeMenu);
});
