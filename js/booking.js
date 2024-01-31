function addDays(date, days) {
var result = new Date(date);
result.setDate(result.getDate() + days);
return result;
}

function formatDate(date) {
return date.toLocaleDateString('fr-FR', { weekday: 'long', day: 'numeric', month: 'short' });
}

function generateCalendar() {
const calendar = document.getElementById('calendar');
const timeSlots = ['10h20', '11h50', '13h20', '14h50', '16h20', '17h50', '19h20', '20h50'];
let currentDate = new Date();

for (let i = 7; i < 14; i++) {
    let dayDate = addDays(currentDate, i);
    let dayDiv = document.createElement('div');
    dayDiv.className = 'day';
    dayDiv.innerHTML = `<h3>${formatDate(dayDate)}</h3>`;
    
    timeSlots.forEach(time => {
    let timeSlotDiv = document.createElement('div');
    timeSlotDiv.className = 'time-slot';
    timeSlotDiv.textContent = time;
    timeSlotDiv.addEventListener('click', function() {
        this.classList.toggle('selected');
    });
    dayDiv.appendChild(timeSlotDiv);
    });
    
    calendar.appendChild(dayDiv);
}
}

window.onload = generateCalendar;