var currentDays = 0;

var selectedDay=null;
var selectedDiv=null;

function addDays(date, days) {
    var result = new Date(date);
    result.setDate(result.getDate() + days);
    return result;
}

function formatDate(date) {
    return date.toLocaleDateString('fr-FR', { weekday: 'long', day: 'numeric', month: 'long'});
}

function formatDateWithHours(date) {
    return date.toLocaleDateString('fr-FR', { weekday: 'long', day: 'numeric', month: 'long', hour: '2-digit', minute:'2-digit'});
}

function generateCalendar(size) {
    const timeSlots = ['10h20', '11h50', '13h20', '14h50', '16h20', '17h50', '19h20', '20h50'];
    let currentDate = new Date();
    let weekDate = addDays(currentDate, currentDays);
    let week = (weekDate.getUTCDate());

    for (let i = currentDays; i < size+currentDays; i++) {
        let dayDate = addDays(currentDate, i);

        if (dayDate.getDay() == 1) {
            continue;
        }
        let dayClass = $('<div class="calendar-col">').attr("class", "day");

        $("#week-field").text("Du " + week + " au " + (week+size-1) + " " + dayDate.toLocaleDateString('fr-FR', {month: 'long'}));

        if (i != currentDays) {
            $(".calendar").append('<div class="separator" style="height: 300px; margin: auto;"></div>')
        }

        $(".calendar").append(dayClass.append("<h3>" + formatDate(dayDate) + "</h3>"))

        timeSlots.forEach(time => {

            let data = time.split("h");

            dayClass.append($('<div class="calendar-col">').attr("class", "time-slot").text(time).click(function() {
                if (selectedDay != null) {
                    selectedDiv.classList.toggle("selected")
                }
                this.classList.toggle('selected');
                dayDate.setHours(parseInt(data[0]));
                dayDate.setMinutes(parseInt(data[1]));
                $(".day-display").text(formatDate(dayDate))
                $(".hour-display").text(time)
                selectedDay = dayDate;
                selectedDiv = this;

                document.cookie="date=" + selectedDay.toJSON();

            }));
        });

    }
}

$("#next").click(function() {
        currentDays+=2;
        $(".calendar").empty();
        generateCalendar(2);
    });


$("#previous").click(function() {
    if (currentDays-2 >= 0) {
        currentDays-=2;
    }
    $(".calendar").empty();
    generateCalendar(2);
});


$("#cancel").click(function() {
    var newurl = window.location.origin + window.location.pathname;
    window.history.pushState({path:newurl},'',newurl);
    window.location.reload();
});
