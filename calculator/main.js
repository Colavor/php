let errorShown = false;

function append(char) {
  const display = document.getElementById("display");
  if (errorShown) {
    display.value = "";
    errorShown = false;
  }
  display.value += char;
}

function clearDisplay() {
  document.getElementById("display").value = "";
  errorShown = false;
}

function backspace() {
  const display = document.getElementById("display");
  display.value = display.value.slice(0, -1);
  errorShown = false;
}

function calculate() {
  const input = document.getElementById("display").value;
  if (!input) return;

  fetch("main.php", {
    method: "POST",
    headers: { "Content-Type": "application/x-www-form-urlencoded" },
    body: "expression=" + encodeURIComponent(input),
  })
    .then((response) => response.text())
    .then((result) => {
      const display = document.getElementById("display");
      if (result.startsWith("Ошибка")) {
        display.value = result;
        errorShown = true;
      } else {
        display.value = parseFloat(result);
        errorShown = false;
      }
    })
    .catch(() => {
      document.getElementById("display").value = "Ошибка соединения";
      errorShown = true;
    });
}
