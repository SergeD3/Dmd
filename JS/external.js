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
var answ = document.querySelector('#inputZip');
var e = document.forms.delForm;
document.forms.delForm.onsubmit = function (e){
  if (answ.value == 0) {
    e.preventDefault();
    alert('Укажите номер кейса!');}
};
