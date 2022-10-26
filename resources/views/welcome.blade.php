<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <style>
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--bg-opacity:1;background-color:#fff;background-color:rgba(255,255,255,var(--bg-opacity))}.bg-gray-100{--bg-opacity:1;background-color:#f7fafc;background-color:rgba(247,250,252,var(--bg-opacity))}.border-gray-200{--border-opacity:1;border-color:#edf2f7;border-color:rgba(237,242,247,var(--border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06)}.text-center{text-align:center}.text-gray-200{--text-opacity:1;color:#edf2f7;color:rgba(237,242,247,var(--text-opacity))}.text-gray-300{--text-opacity:1;color:#e2e8f0;color:rgba(226,232,240,var(--text-opacity))}.text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.text-gray-500{--text-opacity:1;color:#a0aec0;color:rgba(160,174,192,var(--text-opacity))}.text-gray-600{--text-opacity:1;color:#718096;color:rgba(113,128,150,var(--text-opacity))}.text-gray-700{--text-opacity:1;color:#4a5568;color:rgba(74,85,104,var(--text-opacity))}.text-gray-900{--text-opacity:1;color:#1a202c;color:rgba(26,32,44,var(--text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--bg-opacity:1;background-color:#2d3748;background-color:rgba(45,55,72,var(--bg-opacity))}.dark\:bg-gray-900{--bg-opacity:1;background-color:#1a202c;background-color:rgba(26,32,44,var(--bg-opacity))}.dark\:border-gray-700{--border-opacity:1;border-color:#4a5568;border-color:rgba(74,85,104,var(--border-opacity))}.dark\:text-white{--text-opacity:1;color:#fff;color:rgba(255,255,255,var(--text-opacity))}.dark\:text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.dark\:text-gray-500{--tw-text-opacity:1;color:#6b7280;color:rgba(107,114,128,var(--tw-text-opacity))}}
        </style>
        <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">
        <!-- CSS only -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>

        {{-- icons --}}
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    </head>
    <body class="antialiased">
        {{-- <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
            @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                        <a href="{{ url('/home') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Home</a>
                    @else
                        <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                        @endif
                    @endauth
                </div>
            @endif --}}
        <header>

        </header>
        <div id="main" class="container" style="margin-top: 1rem">
            <div id="section_datatable_mayorista">
                @include('Mayorista/datatable')
            </div>
            <div id="section_form_mayorista">
                @include('Mayorista/new_user')
            </div>
        </div>
       
        <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
        <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
        <!-- JavaScript Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
        <script>
            const d = document
            const path_users = "{{ Route::has('get_users') ? route('get_users') : '' }}"
            const path_postal_code = "{{ Route::has('get_postal_code') ? route('get_postal_code') : '' }}"
            const path_new_user = "{{ Route::has('new_user') ? route('new_user') : '' }}"
            const tbl_users = $('#tbl_users')
            const bnt_save = d.getElementById('btn_save')
            const btn_add = d.querySelectorAll('.btn_add')
            const btn_cancel = d.getElementById('btn_cancel')
            const input_postal_code = d.querySelectorAll('.CP')
            const section_datatable_mayorista = d.getElementById('section_datatable_mayorista')
            const section_form_mayorista = d.getElementById('section_form_mayorista')
            let datatable = {}
            d.addEventListener('DOMContentLoaded', () => {
                section_form_mayorista.setAttribute('style', 'display: none')
                renderDatatable(path_users)
            })
            const dropdownElementList = document.querySelectorAll('.dropdown-toggle')
            const dropdownList = [...dropdownElementList].map(dropdownToggleEl => new bootstrap.Dropdown(dropdownToggleEl))

            const renderDatatable = (url) => {
                datatable = tbl_users.DataTable({
                    ajax: {
                        url
                    },
                    columns: [
                        {data: 'idUser'},
                        {
                            data: {},
                            render: data => `<span>${data.Name}</span>`
                        },
                        {data: 'Company'},
                        {data: 'Email'},
                        {data: 'Phone'},
                        {data: 'Discount'},
                        {
                            data: {},
                            render: data => `
                            <div class="row">
                                <div class="col">
                                    <a id="btn_update" data_id="${data.idUser}"><i class="material-icons">mode_edit</i></a>
                                    <a id="btn_delete" data_id="${data.idUser}"><i class="material-icons">delete</i></a>
                                </div>
                            </div>
                            `
                        }
                    ]
                })
            }
            input_postal_code.forEach(input => {
                input.addEventListener('input', () => {
                    if(input.value.length >= 4){
                        let key = 'billingsdata_'
                        if(input.name === 'addresses_PostalCode'){
                            key = 'addresses_'
                        }
                        fetch(`${path_postal_code}/${input.value}`,{
                                method: 'GET',
                                headers: {
                                    'Content-Type': 'application/json'
                                },
                            }
                        ).then(response => response.json())
                        .then(res => {
                            let data_key = Object.entries(res.data)
                            if(data_key.length){
                                let dropdown = {}
                                const dropdown_list = []
                                data_key.forEach(value => {
                                    dropdown_list.push(value[1])
                                })
                                dropdown = createDropdown(dropdown_list, input.parentNode, key)
                                $('#btn_dropdown').trigger('click')
                            }
                        })
                        .catch(error => console.log(error))
                    }
                })
            })

            function renderDataCP(key, postal_code, state, city, neighborhood) {
                d.querySelector(`input[name=${key}PostalCode]`).value = postal_code
                d.querySelector(`input[name=${key}state]`).value = state
                d.querySelector(`input[name=${key}city]`).value = city
                d.querySelector(`input[name=${key}neighborhood]`).value = neighborhood
                d.getElementById('dropdown_postal_code').remove()
            }

            d.getElementById('check_address').addEventListener('click', function(){
                d.querySelectorAll(`#section_addresses input`).forEach(input => {
                    if(input.name){
                        const keys = input.name.split('addresses_')
                        if(d.querySelector(`input[name=billingsdata_${keys[1]}]`))
                            d.querySelector(`input[name=billingsdata_${keys[1]}]`).value = this.checked ? input.value : ''
                        if(keys[1] === 'address')
                            d.querySelector(`input[name=billingsdata_iqualAddress]`).value = this.checked ? input.value : ''
                    }
                })
            })

            const createDropdown = (data, content, key) => {
                if(d.getElementById('dropdown_postal_code')){
                    d.getElementById('dropdown_postal_code').remove()
                }
                const dropdown = d.createElement('div')
                const ul = d.createElement('ul')
                const btn = d.createElement('button')
                dropdown.setAttribute('id', 'dropdown_postal_code')
                dropdown.setAttribute('class', 'dropdown')
                dropdown.setAttribute('style', 'right: -130%')
                btn.setAttribute('id', 'btn_dropdown')
                btn.setAttribute('class', 'btn btn-secondary dropdown-toggle')
                btn.setAttribute('data-bs-toggle', 'dropdown')
                btn.setAttribute('aria-expanded', 'false')
                btn.setAttribute('style', 'display:none')
                btn.setAttribute('type', 'button')
                ul.setAttribute('class', 'dropdown-menu')
                data.forEach(value => {
                    const li = d.createElement('li')
                    const a = d.createElement('a')
                    a.setAttribute('class', 'dropdown-item btn_postal_code')
                    a.setAttribute(`onclick`, `renderDataCP('${key}', '${value.PostalCode}', '${value.state}', '${value.city}', '${value.neighborhood}')`)
                    a.append(`${value.PostalCode}, ${value.state}, ${value.city}, ${value.neighborhood}`)
                    li.appendChild(a)
                    ul.appendChild(li)
                })
                dropdown.appendChild(btn)
                dropdown.appendChild(ul)
                d.getElementById('main').appendChild(dropdown)
            }

            bnt_save.addEventListener('click', () => {
                const error = validateForm('form_mayorista')
                if(!error){
                    const users = getDataForm(d.querySelectorAll('#section_users input'))
                    const addresses = getDataForm(d.querySelectorAll('#section_addresses input'))
                    const billingsdatas = getDataForm(d.querySelectorAll('#section_billingsdatas input'))
                    users.Rfc = billingsdatas.Rfc
                    users.Cfdi = billingsdatas.Cfdi
                    users.BusinessName = billingsdatas.Razon
                    addUser({users, addresses, billingsdatas})
                    section_form_mayorista.setAttribute('style', 'display: none')
                    section_datatable_mayorista.removeAttribute('style')
                }
            })

            btn_add.forEach(btn => {
                btn.addEventListener('click', () => {
                    section_datatable_mayorista.setAttribute('style', 'display: none')
                    section_form_mayorista.removeAttribute('style')
                })
            })

            btn_cancel.addEventListener('click', () => {
                section_form_mayorista.setAttribute('style', 'display: none')
                section_datatable_mayorista.removeAttribute('style')
            })

            const addUser = data => {
                const options = {
                    method: 'POST',
                    body: JSON.stringify(data),
                    headers: {
                        'Content-Type': 'application/json'
                    },
                }
                fetch(path_new_user, options)
                .then(response => response.json())
                .then(res => {
                    const alert = d.createElement('div')
                    alert.setAttribute('style','position: absolute; top 0, rigth: 10%')
                    alert.setAttribute('class', 'alert alert-success')
                    alert.setAttribute('role', 'alert')
                    alert.append('Successful')
                    d.getElementById('main').appendChild(alert)
                    setTimeout(() => {
                        alert.remove()
                        datatable.ajax.reload()
                        d.querySelectorAll('input').forEach(input => {
                            input.value = ''
                            if(input.type === 'checked')
                                input.checked = false
                        })
                    }, 1000);
                })
                .catch(error => console.log(error))
            }

            const getDataForm = inputs => {
                const data = {}
                let aux_data = {}
                inputs.forEach(input => {
                    if(input.name){
                        const key = input.name.split('_')
                        data[formatKey(key[1])] = input.value
                    }
                })
                return data
            }

            const formatKey = name => {
                return name[0].toUpperCase() + name.substring(1)
            }
            /**
             * Se encarga de detectar si algun input se encuentra vacio.
             * @param {string} form_id
             * @return {Boolean} true: Campos vacios. false: No hay campos vacios.
             */
            const validateForm = (form_id) => {
                const form_inputs = document.querySelectorAll(`#${form_id} input[required]`)
                const empty_elements = emptyElements(form_inputs)
                const error = empty_elements.error
                if (error) {
                    empty_elements.element.forEach(value => {
                        if (value) {
                            console.warn(`Empty field: ${value.id}`)
                            renderError(value)
                        }
                    })
                }
                return error
            }

            /**
             * Se encarga de detectar que campos estan
             * vacios.
             * @param {NodeList} elements
             * @return {Object} {
             *     elements: [...],
             *     error: true: Campos vacios | false: No hay campos vacios
             * }
             */
            const emptyElements = elements => {
                let empty_elements = []
                let error = false
                elements.forEach(value => {
                    value.addEventListener('change', () => removeSpanError(value))
                    if (!value.value) {
                        empty_elements.push(value)
                        error = true
                    } else removeSpanError(value)
                })
                return {
                    element: empty_elements,
                    error
                }
            }

            /**
             * Renderiza un error (Coloca el elemento con el
             * borde color #FF0000 por default, se puede perzonalizar el color(Hexadecimal)
             * y agrega un elemento <span> el Nodo padre del elemento).
             * @param {HTMLElement} element
             * @param {String} color
             */
            const renderError = (element, message, color = '#FF0000') => {
                if (typeof element !== 'object') {
                    return console.error(`Invalid element(${element.name}).`)
                }
                const span_id = `error_${element.name}`
                if (document.getElementById(span_id)) {
                    return console.info(`Visible error: ${span_id}`)
                }
                createSpanError(element, span_id, color, message)
            }

            /**
             * Crea el elemento span de error
             * @param {HTMLElement} element
             * @param {String} id
             * @param {String} color
             */
            const createSpanError = (element, id, color = '#FF0000', message = 'Requiered field') => {
                const parent_node = element.parentNode
                const span_error = document.createElement('span')
                span_error.setAttribute('id', id)
                span_error.innerText = message
                span_error.setAttribute(
                    'style',
                    `color: ${color}; font_size: .5rem; font-weight: bold`
                )
                element.setAttribute(
                    'style',
                    `border-bottom: .125rem solid ${color};`
                )
                element.focus()
                parent_node.appendChild(span_error)
            }

            /**
             * Elimina el span de error.
             * @param {HTMLElement} element 
             */
            const removeSpanError = element => {
                const span_id = `error_${element.name}`
                const span_error = document.getElementById(span_id)
                if (span_error) {
                    span_error.remove()
                    element.setAttribute('style', '')
                }
            }

        </script>
    </body>
</html>
