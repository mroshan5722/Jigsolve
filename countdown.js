var timer; 
var timeLeft = 60; 

// What to do when the timer runs out
function gameOver() {
  // This cancels the setInterval, so the updateTimer stops getting called
  clearInterval(timer);
  // if(puzzleSolved(false))
  // window.open("google.com")
}

function resetTimer(){
  clearInterval(timer);
  timeLeft = 60;
}

function updateTimer() {
  timeLeft = timeLeft - 1;
  if(timeLeft >= 0){
    $('.timer').html(timeLeft);
    if (timeLeft <= 9){
      timeLeft= "0" + timeLeft;
      $('.timer').html(timeLeft);
    }
  }
  else {
    gameOver();
  }
}

function start() {
  timer = setInterval(updateTimer, 1000);
  updateTimer();
}
