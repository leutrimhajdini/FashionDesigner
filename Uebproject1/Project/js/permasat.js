const sizeChart = document.getElementById("size-chart");
sizeChart.addEventListener("mouseover", function(event) {
  if (event.target.tagName === "TD") {
    event.target.style.backgroundColor = "#f2f2f2";
  }
});
sizeChart.addEventListener("mouseout", function(event) {
  if (event.target.tagName === "TD") {
    event.target.style.backgroundColor = "";
  }
});