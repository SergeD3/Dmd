<div class="col-1">
  <label for="nabl">Наблюдение</label>
  <input type="text" class="form-control" disabled>
</div>
<div class="form-group col-md-2 ml-5">
<label for="inputState">Пол</label>
<select id="inputState" class="form-control">
<option selected>Мужской</option>
<option>Женский</option>
</select>
</div>
<div class="col-1 ml-3">
<label for="nabl">Возраст</label>
<input type="text" class="form-control" >
</div>
<div class="koyki_box ml-5">
<label for="koyki" class="koyki">Койко-дни: </label>
<div class="form-check form-check-inline">
<input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1" onclick="agreeForm(this.form)">
<label class="form-check-label" for="inlineRadio1">Дни</label>
</div>
<div class="form-check form-check-inline">
<input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2" onclick="agreeForm(this.form)">
<label class="form-check-label" for="inlineRadio2">Часы</label>
</div>
<div class="input-group">

<input type="text" aria-label="First name" class="form-control" id="days" placeholder="Дни" ><br>
<input type="text" aria-label="Last name" class="form-control" id="hour" placeholder="Часы">
</div>

</div>

<div class="form-group">
  <label for="exampleInputPassword1" class="col-sm-1">Дата смерти:</label>
  <input type="date" class="form-control row col-sm-11 ml-2" name="Date_death" id="Date_death" placeholder="">
</div>
<div class="form-group">
<label for="exampleInputPassword1" class="col-sm-1">Дата вскрытия:</label>
<input type="date" class="form-control row col-sm-11 ml-2" name="Date_autopsy" id="Date_autopsy" placeholder="">
</div>
<div class="col-1">
<label for="nabl">Разница в часах</label>
<input type="text" class="form-control" disabled>
</div>


<div class="form-group">
<label for="exampleInputPassword1" class="col-sm-3">Дата добавления:</label>
<input type="date" class="form-control row col-sm-11 ml-2" name="Date_add" id="Date_add" placeholder="">
</div>
<div class="form-group">
<label for="exampleInputPassword1" class="col-sm-10">Дата окончания протокола:</label>
<input type="date" class="form-control row col-sm-11 ml-2" name="Date_end" id="Date_end" placeholder="">
</div>
<div class="form-group col-md-3 ml-2">
<label for="inputState">Правильность оформления свидетельства:</label>
<select id="inputState" class="form-control">
<option selected>Да</option>
<option>Нет</option>
</select>
</div>
<div class="form-group col-md-2 ml-2">
<label for="inputState">Обязательность аутопсии:</label>
<select id="inputState" class="form-control">
<option selected>Да</option>
<option>Нет</option>
</select>
</div>
<div class="input-group">
<div class="input-group-prepend ml-2">
<span class="input-group-text">Комментарий к ПОС:</span>
</div>
<textarea class="form-control" aria-label="With textarea"></textarea>
</div>
<div class="input-group mt-3">
<div class="input-group-prepend ml-2 ">
<span class="input-group-text">Комментарий к аутопсии:</span>
</div>
<textarea class="form-control" aria-label="With textarea"></textarea>
</div>
