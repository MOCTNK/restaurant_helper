<form id="form_add_restaurant" style="width: 400px; margin: auto;">
    <p><div class="title">Создание ресторана</div></p>
    <p class="custom-form_field">
    <div class="custom-form_label star">Введите название ресторана</div>
    <input placeholder="Название" name="name"/>
    </p>
    <p class="custom-form_field">
    <div class="custom-form_label">Добавьте логотип ресторана</div>
    <input class="input_file" type="file" placeholder="Название" name="logo" style="margin-top: 10px;"/>
    </p>
    <p class="custom-form_field">
    <div class="custom-form_label">Введите адрес ресторана</div>
    <input placeholder="Адрес" name="address"/>
    </p>
    <p class="custom-form_field">
    <div class="custom-form_label">Введите описание ресторана</div>
    <textarea placeholder="Описание" style="margin-top: 10px;" name="about"></textarea>
    </p>
    <p>
        <button type="submit" style="float: right;">Добавить</button>
    </p>
</form>