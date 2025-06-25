document.addEventListener("DOMContentLoaded", function () {
  var grid = document.querySelector(".masonry-grid");

  function initMasonry() {
    if (window.innerWidth < 992) {
      var masonry = new Masonry(grid, {
        itemSelector: ".grid-item",
        percentPosition: true,
        gutter: 0,
        transitionDuration: "0.2s",
      });

      imagesLoaded(grid).on("progress", function () {
        masonry.layout();
      });
    }
  }

  initMasonry();

  window.addEventListener("resize", function () {
    initMasonry();
  });
});
