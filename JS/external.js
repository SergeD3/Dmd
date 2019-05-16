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
