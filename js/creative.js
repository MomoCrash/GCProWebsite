var lastOpen = null;

var darkPanel = $("<div>")

function open(page) {

  if (lastOpen == page) {
    closeAll();
    lastOpen == null;
    return;
  } else {
    reduceAll();
  }

  lastOpen=page;
  switch (page) {
    case "dark":
      $("#darkRoomDiv").css("height", "900px");
      openPanel(page)
      break;

    case "light":
      $("#lightRoomDiv").css("height", "900px");
      break;

    case "battle":
      $("#battleRoomDiv").css("height", "900px");
      break;
  
    default:
      break;
  }

}

async function wait(ms) {
  return new Promise(resolve => setTimeout(resolve, ms));
}

async function openPanel(page) {
  switch (page) {

    case "dark":
      await wait(3000);
      $("#darkRoomDiv").append("<p> SAlut l'équipe </p>")
      break;

    case "light":
      $("#lightRoomDiv").css("height", "900px");
      break;

    case "battle":
      $("#battleRoomDiv").css("height", "900px");
      break;
  
    default:
      break;

  }
  
}

function reduceAll() {
  $("#darkRoomDiv").css("height", "100px").empty();
  $("#lightRoomDiv").css("height", "100px").empty();
  $("#battleRoomDiv").css("height", "100px").empty();
}

function closeAll() {
  $("#darkRoomDiv").css("height", "300px");
  $("#lightRoomDiv").css("height", "300px");
  $("#battleRoomDiv").css("height", "300px");
}

$("#darkRoomDiv").click(function() {
  open("dark");
});
$("#lightRoomDiv").click(function() {
  open("light");
});
$("#battleRoomDiv").click(function() {
  open("battle");
});