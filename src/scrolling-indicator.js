const section = document.querySelector("#mixen-is-different");

if (section) {
  const verticalLine = section.querySelector(".vertical-line");
  const contentContainer = section.querySelectorAll(".container")[1];

  const mediaQuery = window.matchMedia("(min-width: 768px)");

  function updateIndicator() {
    if (!mediaQuery.matches) return;

    const sectionRect = section.getBoundingClientRect();
    const contentRect = contentContainer.getBoundingClientRect();

    const windowCenter = window.innerHeight / 2;

    // posición relativa del centro de la ventana respecto al contentContainer
    let indicatorTop = windowCenter - contentRect.top;

    const indicatorHeight = 200;
    const maxIndicatorTop = contentContainer.offsetHeight - indicatorHeight;

    // Limitar valores para no salirse del contenedor
    if (indicatorTop < 0) indicatorTop = 0;
    if (indicatorTop > maxIndicatorTop) indicatorTop = maxIndicatorTop;

    verticalLine.style.setProperty("--indicator-top", `${indicatorTop}px`);
  }

  function toggleListener(e) {
    if (e.matches) {
      window.addEventListener("scroll", updateIndicator);
      updateIndicator();
    } else {
      window.removeEventListener("scroll", updateIndicator);
      verticalLine.style.removeProperty("--indicator-top");
    }
  }

  mediaQuery.addEventListener("change", toggleListener);

  if (mediaQuery.matches) {
    window.addEventListener("scroll", updateIndicator);
    window.addEventListener("DOMContentLoaded", updateIndicator);
    updateIndicator();
  }
}
