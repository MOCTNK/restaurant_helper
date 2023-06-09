<p>
    <div class="title">Создание главного админа</div>
</p>
<form id="form_admin">
    <p class="custom-form_field">
        <div class="custom-form_label star">Введите имя сотрудника</div>
        <input placeholder="Имя" name="admin_name"/>
    </p>
    <p class="custom-form_field">
        <div class="custom-form_label star">Введите фамилию сотрудника</div>
        <input placeholder="Фамилия" name="admin_surname"/>
    </p>
    <p class="custom-form_field">
        <div class="custom-form_label star">Введите отчество сотрудника</div>
        <input placeholder="Отчество" name="admin_patronymic"/>
    </p>
    <p class="custom-form_field">
        <div class="custom-form_label star">Введите дату рождения сотрудника</div>
        <input type="date" name="admin_date_of_birth"/>
    </p>
	<p class="custom-form_field">
		<div class="custom-form_label star">Введите логин</div>
		<input placeholder="Логин" name="admin_login"/>
	</p>
	<p class="custom-form_field">
		<div class="custom-form_label star">Введите пароль</div>
		<input type="password" placeholder="Пароль" name="admin_password"/>
	</p>
	<p class="custom-form_field">
		<div class="custom-form_label star">Повторите пароль</div>
		<input type="password" placeholder="Пароль" name="admin_password_repeat"/>
	</p>
	<p>
		<button type="submit" style="float: right;">Создать</button>
	</p>
</form>