function agreeForm(f) {
// Если поставлен флажок, снимаем блокирование кнопки
if (f.inlineRadio1.checked) {f.hour.disabled = 1;
  f.days.disabled = 0;
}
// В противном случае вновь блокируем кнопку
else if (f.inlineRadio2.checked) {
  f.days.disabled = 1;
  f.hour.disabled = 0;
}
}
// Date.daysBetween = function( date1, date2 ) {
//   //Get 1 day in milliseconds
//   var one_day=1000*60*60*24;
//
//   // Convert both dates to milliseconds
//   var date1_ms = date1.getTime();
//   var date2_ms = date2.getTime();
//
//   // Calculate the difference in milliseconds
//   var difference_ms = date2_ms - date1_ms;
//
//   // Convert back to days and return
//   return Math.round(difference_ms/one_day);
// }
//
// //Set the two dates
// var y2k  = new Date(2000, 0, 1);
// var Jan1st2010 = new Date(y2k.getFullYear() + 10, y2k.getMonth(), y2k.getDate());
// var today= new Date();
// //displays 726
// console.log( 'Days since '
//            + Jan1st2010.toLocaleDateString() + ': '
//            + Date.daysBetween(Jan1st2010, today));
//Текущая дата
    var todayDate = new Date();
 
    //Выбранная дата
    var currentDate = new Date(2014, 02, 23);

    //Разница во времени
    var dateDifference = currentDate.getTime() - todayDate.getTime();

    //Дата, созданная из остатка времени
    var remainsDate = new Date(dateDifference);
