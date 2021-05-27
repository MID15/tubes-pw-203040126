// SideNav
const sideNav = document.querySelectorAll('.sidenav');
M.Sidenav.init(sideNav);

// Slider
const slider = document.querySelectorAll('.slider');
M.Slider.init(slider, {
  indicators: false,
  height: 800,
  transition: 600,
  interval: 3000
});

// scrollspy
const scrollspy = document.querySelectorAll('.scrollspy');
M.ScrollSpy.init(scrollspy, {
  scrollOffset: 50
});
// scrollspy
const modal = document.querySelectorAll('.modal');
M.Modal.init(modal, {
  scrollOffset: 50
});

// Modals
const modals = document.querySelectorAll('.modal');
M.Modal.init(modals);

// preview image
function previewImage() {
  const gambar = document.querySelector('.gambar');
  const imgPreview = document.querySelector('.img-preview');

  const oFReader = new FileReader();
  oFReader.readAsDataURL(gambar.files[0]);

  oFReader.onload = function(oFREvent) {
    imgPreview.src = oFREvent.target.result;
  }
}