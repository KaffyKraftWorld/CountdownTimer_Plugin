document.addEventListener("DOMContentLoaded", function() {
  var countdownElement = document.querySelector(".countdown-timer");
  if (countdownElement) {
      var duration = parseInt(countdownElement.dataset.duration);
      var format = countdownElement.dataset.format;
      startCountdown(duration, format);
  }
});

function startCountdown(duration, format) {
  var countdownInterval = setInterval(function() {
      var timeLeft = getTimeLeft(duration);
      displayCountdown(countdownElement, timeLeft, format);

      if (timeLeft.total <= 0) {
          clearInterval(countdownInterval);
      }
  }, 1000);
}

function getTimeLeft(duration) {
  var now = new Date().getTime();
  var endTime = now + duration * 1000;
  var total = endTime - now;

  var seconds = Math.floor((total / 1000) % 60);
  var minutes = Math.floor((total / 1000 / 60) % 60);
  var hours = Math.floor((total / (1000 * 60 * 60)) % 24);
  var days = Math.floor(total / (1000 * 60 * 60 * 24));

  return {
      total: total,
      days: days,
      hours: hours,
      minutes: minutes,
      seconds: seconds
  };
}

function displayCountdown(element, timeLeft, format) {
  var formattedTime = format
      .replace('d', timeLeft.days)
      .replace('h', timeLeft.hours)
      .replace('m', timeLeft.minutes)
      .replace('s', timeLeft.seconds);

  element.innerHTML = formattedTime;
}
