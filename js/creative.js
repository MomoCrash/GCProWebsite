var lastOpen = null;
var darkPanel = $("<div>")
var clickSection = false;

function open(page) {

  // Prevent menu from closing when click on mode / map section
  if (clickSection) {
    clickSection = false;
    return;
  }

  // Close other page / reduce if is the same or other
  if (lastOpen == page) {
    closeAll();
    lastOpen = null;
    return;
  } else {
    reduceAll();
  }

  // Set the opened page to current
  lastOpen=page;

  // Switch beetween the different states
  switch (page) {
    case "dark":
      $("#darkRoomDiv").css("height", "900px");
      modeSelector(page, ["Escape game","Battle","Survival"], ["../ressources/temps_estime.png", "../ressources/bn_joueur.png"])
      break;

    case "light":
      $("#lightRoomDiv").css("height", "900px");
      modeSelector(page, ["Escape game","Battle","Survival"], ["../ressources/temps_estime.png", "../ressources/bn_joueur.png"])
      break;

    case "battle":
      $("#battleRoomDiv").css("height", "900px");
      modeSelector(page, ["EscapeGame","Battle","Survival"], ["../ressources/temps_estime.png", "../ressources/bn_joueur.png"])
      break;
  
    default:
      break;
  }

}

// Use to await a fixed time
async function wait(ms) {
  return new Promise(resolve => setTimeout(resolve, ms));
}

// Apply a delay on the section open to wait page opening
async function delayOpen(page, modes, param) {
    await wait(600);
    if (lastOpen == null) return;
    updateSection(page, modes, param);
}

// Generator for generate a complete mode with imge / name / modes
function modeSelector(name, modes, images) {
      let content = $('#' + name + '-content');

      for (let index = 0; index < modes.length; index++) {

        let largeContainer = $('<div id="' + modes[index] + '" class="vertical-container">');
        largeContainer.append('<h1>' + modes[index] + '</h1> <p>Default Description</p>');
        let horizontalContainer = $('<div class="horizontal-container">');

        for (let index = 0; index < images.length; index++) {
          let verticalcontainer = $('<div class="vertical-container">');

          verticalcontainer.append('<img class="logoroom" src="' + images[index] + '" alt="Descriptor"> <p>60 minutes</p> ');

          horizontalContainer.append(verticalcontainer);
        }

        horizontalContainer.click(function() {
          mapSelector(name);
          clickSection = true;
        });
        largeContainer.append(horizontalContainer);
        content.append(largeContainer);

      }
}

function mapSelector(name, modes, images) {
  let content = $('#' + name + '-content');

      for (let index = 0; index < modes.length; index++) {

        let largeContainer = $('<div id="' + modes[index] + '" class="vertical-container">');
        largeContainer.append('<h1>' + modes[index] + '</h1> <p>Default Description</p>');
        let horizontalContainer = $('<div class="horizontal-container">');

        for (let index = 0; index < images.length; index++) {
          let verticalcontainer = $('<div class="vertical-container">');

          verticalcontainer.append('<img class="logoroom" src="' + images[index] + '" alt="Descriptor"> <p>60 minutes</p> ');

          horizontalContainer.append(verticalcontainer);
        }

        horizontalContainer.click(function() {
          mapSelector(name);
          clickSection = true;
        });
        largeContainer.append(horizontalContainer);
        content.append(largeContainer);

      }
}

function reduceAll() {
  $("#dark-content").empty();
  $("#darkRoomDiv").css("height", "100px");
  $("#light-content").empty();
  $("#lightRoomDiv").css("height", "100px");
  $("#battle-content").empty();
  $("#battleRoomDiv").css("height", "100px");
}

function closeAll() {
  $("#dark-content").empty();
  $("#darkRoomDiv").css("height", "300px");
  $("#light-content").empty();
  $("#lightRoomDiv").css("height", "300px");
  $("#battle-content").empty();
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