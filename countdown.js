var timer; 
var timeLeft = 10; 

// What to do when the timer runs out
function gameOver() {
  // This cancels the setInterval, so the updateTimer stops getting called
  clearInterval(timer);
  timeLeft = 60;
}

function updateTimer() {
  timeLeft = timeLeft - 1;
  if(timeLeft >= 0)
    $('.timer').html(timeLeft);
  else {
    gameOver();
  }
}

function resetTimer(){
  timeLift = 60;
}

// The button has an on-click event handler that calls this
function start() {
  // setInterval is a built-in function that will call the given function
  // every N milliseconds (1 second = 1000 ms)
  timer = setInterval(updateTimer, 1000);
  
  // It will be a whole second before the time changes, so we'll call the update
  // once ourselves
  updateTimer();
  
  // We don't want the to be able to restart the timer while it is running,
  // so hide the button.
   $('.reset').hide();
}
