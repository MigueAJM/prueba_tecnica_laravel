<h5><b>Nuevo Mayorista</b></h5>
<form id="form_mayorista">
    <div class="card">
        <div class="card-body" style="height:75vh; overflow:auto">
            <div id="section_users">
                <div class="card-title">
                    <div class="row">
                        <div class="col"><b>Informacion mayorista</b></div>
                    </div>
                </div>
                <div class="row">
                    <div class="col mb-3">
                        <label for="users_name" class="form-label">Nombre</label>
                        <input type="text" class="form-control" id="name" name="users_name" placeholder="Nombre" required>
                    </div>
                    <div class="col mb-3">
                        <label for="users_company" class="form-label">Empresa</label>
                        <input type="text" class="form-control" id="company" name="users_company" placeholder="Empresa" required>
                    </div>
                </div>
                <div class="row">
                    <div class="col mb-3">
                        <label for="users_email" class="form-label">Correo electronico</label>
                        <input type="email" class="form-control" id="email" name="users_email" placeholder="Email" required>
                    </div>
                    <div class="col mb-3">
                        <label for="users_phone" class="form-label">Numero de telefono</label>
                        <input type="number" class="form-control" id="phone" name="users_phone" placeholder="1111111111"  maxlength="10" required>
                    </div>
                </div>
                <div class="row">
                    <div class="col-6 mb-3">
                        <label for="users_discount" class="form-label">Porcentaje de descuento</label>
                        <input type="number" class="form-control" id="discount" name="users_discount" placeholder="Porcentaje de descuento"  maxlength="3">
                    </div>
                    <div class="col-6 mb-3" style="display: none">
                        <input type="text" class="form-control" id="razon_social" name="users_BusinessName" hidden>
                    </div>
                </div>
                <div class="row" style="display: none">
                    <div class="col-6 mb-3">
                        <input type="text" class="form-control" id="cfdi" name="users_cfdi" placeholder="Uso de CFDI">
                    </div>
                    <div class="col-6 mb-3">
                        <input type="text" class="form-control" id="rfc" name="users_rfc" placeholder="RFC">
                    </div>
                </div>
            </div>
            <div id="section_addresses">
                <div class="card-title">
                    <div class="row">
                        <div class="col"><b>Direccion de envio</b></div>
                    </div>
                </div>
                <div class="row">
                    <div class="col mb-3">
                        <label for="addresses_contactName" class="form-label">Nombre de Contacto</label>
                        <input type="text" class="form-control" id="name_contact" name="addresses_contactName"
                            placeholder="Nombre de Contacto">
                    </div>
                    <div class="col mb-3">
                        <label for="addresses_address" class="form-label">Direccion</label>
                        <input type="text" class="form-control" id="address" name="addresses_address" placeholder="Direccion">
                    </div>
                </div>
                <div class="row">
                    <div class="col mb-3">
                        <label for="addresses_PostalCode" class="form-label">Codigo postal</label>
                        <input type="number" class="form-control CP" id="cp" name="addresses_PostalCode" placeholder="Codigo postal">
                    </div>
                    <div class="col mb-3">
                        <label for="addresses_neighborhood" class="form-label">Colonia</label>
                        <input type="text" class="form-control" id="colonia" data_cp="a_cp" name="addresses_neighborhood" placeholder="Colonia">
                    </div>
                </div>
                <div class="row">
                    <div class="col mb-3">
                        <label for="addresses_city" class="form-label">Ciudad</label>
                        <input type="text" class="form-control" id="city" data_cp="a_cp" name="addresses_city" placeholder="Ciudad">
                    </div>
                    <div class="col mb-3">
                        <label for="addresses_state" class="form-label">Estado</label>
                        <input type="text" class="form-control" id="state" data_cp="a_cp" name="addresses_state" placeholder="Estado">
                    </div>
                </div>
                <div class="row">
                    <div class="col mb-3">
                        <label for="addresses_email" class="form-label">Correo electronico</label>
                        <input type="email" class="form-control" id="email_contact" name="addresses_email" placeholder="Email">
                    </div>
                    <div class="col mb-3">
                        <label for="addresses_phone" class="form-label">Numero de telefono</label>
                        <input type="number" class="form-control" id="phone_contact" name="addresses_phone"
                            placeholder="1111111111">
                    </div>
                </div>
            </div>
            <div id="section_billingsdatas">
                <div class="card-title">
                    <div class="row">
                        <div class="col"><b>Direccion de facturacion</b></div>
                        <div class="col">
                            <input type="checkbox" id="check_address">
                            <label for="check_address">Copiar Informacion de direccion de envio</label>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col mb-3">
                        <label for="billingsdata_contactName" class="form-label">Nombre de Contacto</label>
                        <input type="text" class="form-control" id="name_contact_f" name="billingsdata_contactName"
                            placeholder="Nombre de Contacto">
                    </div>
                    <div class="col mb-3">
                        <label for="billingsdata_iqualAddress" class="form-label">Direccion</label>
                        <input type="text" class="form-control" id="addresses_f" name="billingsdata_iqualAddress" placeholder="Direccion">
                    </div>
                </div>
                <div class="row">
                    <div class="col mb-3">
                        <label for="billingsdata_PostalCode" class="form-label">Codigo postal</label>
                        <input type="number" class="form-control CP" id="cp_f" name="billingsdata_PostalCode" placeholder="Codigo postal">
                    </div>
                    <div class="col mb-3">
                        <label for="billingsdata_neighborhood" class="form-label">Colonia</label>
                        <input type="text" class="form-control" id="colonia_f" data_cp="b_cp" name="billingsdata_neighborhood" placeholder="Colonia">
                    </div>
                </div>
                <div class="row">
                    <div class="col mb-3">
                        <label for="billingsdata_city" class="form-label">Ciudad</label>
                        <input type="text" class="form-control" id="city_f" data_cp="b_cp" name="billingsdata_city" placeholder="Ciudad">
                    </div>
                    <div class="col mb-3">
                        <label for="billingsdata_state" class="form-label">Estado</label>
                        <input type="text" class="form-control" id="state_f" data_cp="b_cp" name="billingsdata_state" placeholder="Estado">
                    </div>
                </div>
                <div class="row">
                    <div class="col mb-3">
                        <label for="billingsdata_email" class="form-label">Correo electronico</label>
                        <input type="email" class="form-control" id="email_contact" name="billingsdata_email" placeholder="Email">
                    </div>
                    <div class="col mb-3">
                        <label for="billingsdata_phone" class="form-label">Numero de telefono</label>
                        <input type="number" class="form-control" id="phone_contact" name="billingsdata_phone"
                            placeholder="1111111111" maxlength="10">
                    </div>
                </div>
                <div class="card-title">
                    <div class="row">
                        <div class="col"><b>Datos de facturacion</b></div>
                    </div>
                </div>
                <div class="row">
                    <div class="col mb-3">
                        <label for="razon_social" class="form-label">Razon Social</label>
                        <input type="text" class="form-control" id="razon_social" name="_razon"placeholder="Razon Social">
                    </div>
                    <div class="col mb-3">
                        <label for="cfdi" class="form-label">Uso de CFDI</label>
                        <input type="email" class="form-control" id="cfdi" name="_cfdi" placeholder="Uso de CFDI">
                    </div>
                </div>
                <div class="row">
                    <div class="col-6 mb-3">
                        <label for="rfc" class="form-label">RFC</label>
                        <input type="text" class="form-control" id="rfc" name="_rfc" placeholder="RFC">
                    </div>
                </div>
            </div>
        </div>
        <div class="card-footer">
            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                <a id="btn_cancel" class="btn btn-danger" >Cancelar</a>
                <a id="btn_save" class="btn btn-primary" >Guardar</a>
            </div>
        </div>
    </div>
</form>

