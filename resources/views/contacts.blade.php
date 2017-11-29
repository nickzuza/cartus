@extends('layout')
@section('meta')

@stop
@section('content')
    <script>
        var pins=[
            {
                lat: -25.363, lng: 131.044
            },{
                lat: -25.363, lng: -131.044
            },{
                lat: 25.363, lng: -131.044
            }
        ]
    </script>
    <div class="page contactsPage" id="contactsPage">
        <div class="container">
            <div class="breadcrumbs">
                <a href="#" class="breadcrumb">Главная</a>
                <span class="breadcrumb">Контакты</span>
            </div>
            <div class="h1-title">
                <h1>Контакты</h1>
            </div>
            <div class="map-tabs">
                <button class="map-tab active" data-num="0" ><span>Кишинев</span></button>
                <button class="map-tab" data-num="1"><span>Бельцы</span></button>
                <button class="map-tab" data-num="2"> <span>Кагул</span></button>
            </div>

        </div>
        <div class="map-wrapper">
            <div class="map-info">
                <div class="info-wrap active">
                    <div class="title">
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" width="22px" height="22px" x="0px" y="0px" viewBox="0 0 54.757 54.757" style="enable-background:new 0 0 54.757 54.757;" xml:space="preserve">
                            <path d="M40.94,5.617C37.318,1.995,32.502,0,27.38,0c-5.123,0-9.938,1.995-13.56,5.617c-6.703,6.702-7.536,19.312-1.804,26.952  L27.38,54.757L42.721,32.6C48.476,24.929,47.643,12.319,40.94,5.617z M27.557,26c-3.859,0-7-3.141-7-7s3.141-7,7-7s7,3.141,7,7  S31.416,26,27.557,26z"/>
                        </svg>
                        Наш адрес
                    </div>
                    <div class="text">
                        <span>мун. Chisinau, </span>
                        <span>ул. Mitropolitul Gurie Grosu 1 </span>
                        <span class = "email">e-mail  - <a href="#">info@cartus.md</a></span>
                    </div>
                    <div class="title">
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" width="23px" height="23px" viewBox="0 0 341.648 341.648" style="enable-background:new 0 0 341.648 341.648;" xml:space="preserve">
                            <g>
                                <path d="M238.468,40.062c-6.791,0-12.292-5.51-12.292-12.298V12.298C226.176,5.504,220.664,0,213.878,0h-8.202   c-6.798,0-12.298,5.504-12.298,12.298V27.77c0,6.788-5.513,12.298-12.298,12.298h-77.894c-6.794,0-12.298,5.503-12.298,12.298   v276.986c0,6.785,5.503,12.297,12.298,12.297h135.276c6.785,0,12.298-5.512,12.298-12.297V52.359   C250.76,45.57,245.26,40.062,238.468,40.062z M117.79,278.358c0-6.791,5.503-12.298,12.298-12.298   c6.789,0,12.298,5.507,12.298,12.298c0,6.785-5.509,12.298-12.298,12.298C123.293,290.656,117.79,285.144,117.79,278.358z    M130.087,225.324c6.789,0,12.298,5.506,12.298,12.298c0,6.785-5.509,12.298-12.298,12.298c-6.794,0-12.298-5.513-12.298-12.298   C117.79,230.83,123.293,225.324,130.087,225.324z M117.79,196.886c0-6.792,5.503-12.298,12.298-12.298   c6.789,0,12.298,5.506,12.298,12.298c0,6.785-5.509,12.298-12.298,12.298C123.293,209.184,117.79,203.671,117.79,196.886z    M195.804,320.729h-51.5c-3.401,0-6.149-2.75-6.149-6.149c0-3.398,2.748-6.148,6.149-6.148h51.5c3.398,0,6.149,2.75,6.149,6.148   C201.953,317.973,199.202,320.729,195.804,320.729z M170.056,225.324c6.788,0,12.298,5.506,12.298,12.298   c0,6.785-5.51,12.298-12.298,12.298c-6.795,0-12.298-5.513-12.298-12.298C157.757,230.83,163.261,225.324,170.056,225.324z    M157.757,196.886c0-6.792,5.503-12.298,12.298-12.298c6.788,0,12.298,5.506,12.298,12.298c0,6.785-5.51,12.298-12.298,12.298   C163.261,209.184,157.757,203.671,157.757,196.886z M170.056,266.061c6.788,0,12.298,5.507,12.298,12.298   c0,6.785-5.51,12.298-12.298,12.298c-6.795,0-12.298-5.513-12.298-12.298C157.757,271.567,163.261,266.061,170.056,266.061z    M210.023,290.656c-6.798,0-12.298-5.513-12.298-12.298c0-6.791,5.5-12.298,12.298-12.298c6.785,0,12.298,5.507,12.298,12.298   C222.321,285.144,216.809,290.656,210.023,290.656z M210.023,249.92c-6.798,0-12.298-5.513-12.298-12.298   c0-6.792,5.5-12.298,12.298-12.298c6.785,0,12.298,5.506,12.298,12.298C222.321,244.407,216.809,249.92,210.023,249.92z    M210.023,209.184c-6.798,0-12.298-5.513-12.298-12.298c0-6.792,5.5-12.298,12.298-12.298c6.785,0,12.298,5.506,12.298,12.298   C222.321,203.671,216.809,209.184,210.023,209.184z M230.007,149.03c0,6.791-5.512,12.298-12.298,12.298h-93.771   c-6.794,0-12.298-5.507-12.298-12.298v-67.81c0-6.794,5.503-12.297,12.298-12.297h93.771c6.786,0,12.298,5.503,12.298,12.297   V149.03z"/>
                            </g>
                       </svg>
                        Руководство
                    </div>
                    <div class="text">
                       <span class="phone">+373 (22) <b>22-55-75</b></span>
                    </div>
                    <div class="title">
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" width="23px" height="23px" viewBox="0 0 341.648 341.648" style="enable-background:new 0 0 341.648 341.648;" xml:space="preserve">
                            <g>
                                <path d="M238.468,40.062c-6.791,0-12.292-5.51-12.292-12.298V12.298C226.176,5.504,220.664,0,213.878,0h-8.202   c-6.798,0-12.298,5.504-12.298,12.298V27.77c0,6.788-5.513,12.298-12.298,12.298h-77.894c-6.794,0-12.298,5.503-12.298,12.298   v276.986c0,6.785,5.503,12.297,12.298,12.297h135.276c6.785,0,12.298-5.512,12.298-12.297V52.359   C250.76,45.57,245.26,40.062,238.468,40.062z M117.79,278.358c0-6.791,5.503-12.298,12.298-12.298   c6.789,0,12.298,5.507,12.298,12.298c0,6.785-5.509,12.298-12.298,12.298C123.293,290.656,117.79,285.144,117.79,278.358z    M130.087,225.324c6.789,0,12.298,5.506,12.298,12.298c0,6.785-5.509,12.298-12.298,12.298c-6.794,0-12.298-5.513-12.298-12.298   C117.79,230.83,123.293,225.324,130.087,225.324z M117.79,196.886c0-6.792,5.503-12.298,12.298-12.298   c6.789,0,12.298,5.506,12.298,12.298c0,6.785-5.509,12.298-12.298,12.298C123.293,209.184,117.79,203.671,117.79,196.886z    M195.804,320.729h-51.5c-3.401,0-6.149-2.75-6.149-6.149c0-3.398,2.748-6.148,6.149-6.148h51.5c3.398,0,6.149,2.75,6.149,6.148   C201.953,317.973,199.202,320.729,195.804,320.729z M170.056,225.324c6.788,0,12.298,5.506,12.298,12.298   c0,6.785-5.51,12.298-12.298,12.298c-6.795,0-12.298-5.513-12.298-12.298C157.757,230.83,163.261,225.324,170.056,225.324z    M157.757,196.886c0-6.792,5.503-12.298,12.298-12.298c6.788,0,12.298,5.506,12.298,12.298c0,6.785-5.51,12.298-12.298,12.298   C163.261,209.184,157.757,203.671,157.757,196.886z M170.056,266.061c6.788,0,12.298,5.507,12.298,12.298   c0,6.785-5.51,12.298-12.298,12.298c-6.795,0-12.298-5.513-12.298-12.298C157.757,271.567,163.261,266.061,170.056,266.061z    M210.023,290.656c-6.798,0-12.298-5.513-12.298-12.298c0-6.791,5.5-12.298,12.298-12.298c6.785,0,12.298,5.507,12.298,12.298   C222.321,285.144,216.809,290.656,210.023,290.656z M210.023,249.92c-6.798,0-12.298-5.513-12.298-12.298   c0-6.792,5.5-12.298,12.298-12.298c6.785,0,12.298,5.506,12.298,12.298C222.321,244.407,216.809,249.92,210.023,249.92z    M210.023,209.184c-6.798,0-12.298-5.513-12.298-12.298c0-6.792,5.5-12.298,12.298-12.298c6.785,0,12.298,5.506,12.298,12.298   C222.321,203.671,216.809,209.184,210.023,209.184z M230.007,149.03c0,6.791-5.512,12.298-12.298,12.298h-93.771   c-6.794,0-12.298-5.507-12.298-12.298v-67.81c0-6.794,5.503-12.297,12.298-12.297h93.771c6.786,0,12.298,5.503,12.298,12.297   V149.03z"/>
                            </g>
                       </svg>
                        Бухгалтерия
                    </div>
                    <div class="text">
                        <span class="phone">+373 (22) <b>22-55-75</b></span>
                        <span class="phone">+373 (22) <b>73-72-60</b><b style="color:#515151; font-weight: 400;margin-left: 5px">(fax)</b></span>
                    </div>
                    <div class="title">
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" width="23px" height="23px" viewBox="0 0 341.648 341.648" style="enable-background:new 0 0 341.648 341.648;" xml:space="preserve">
                            <g>
                                <path d="M238.468,40.062c-6.791,0-12.292-5.51-12.292-12.298V12.298C226.176,5.504,220.664,0,213.878,0h-8.202   c-6.798,0-12.298,5.504-12.298,12.298V27.77c0,6.788-5.513,12.298-12.298,12.298h-77.894c-6.794,0-12.298,5.503-12.298,12.298   v276.986c0,6.785,5.503,12.297,12.298,12.297h135.276c6.785,0,12.298-5.512,12.298-12.297V52.359   C250.76,45.57,245.26,40.062,238.468,40.062z M117.79,278.358c0-6.791,5.503-12.298,12.298-12.298   c6.789,0,12.298,5.507,12.298,12.298c0,6.785-5.509,12.298-12.298,12.298C123.293,290.656,117.79,285.144,117.79,278.358z    M130.087,225.324c6.789,0,12.298,5.506,12.298,12.298c0,6.785-5.509,12.298-12.298,12.298c-6.794,0-12.298-5.513-12.298-12.298   C117.79,230.83,123.293,225.324,130.087,225.324z M117.79,196.886c0-6.792,5.503-12.298,12.298-12.298   c6.789,0,12.298,5.506,12.298,12.298c0,6.785-5.509,12.298-12.298,12.298C123.293,209.184,117.79,203.671,117.79,196.886z    M195.804,320.729h-51.5c-3.401,0-6.149-2.75-6.149-6.149c0-3.398,2.748-6.148,6.149-6.148h51.5c3.398,0,6.149,2.75,6.149,6.148   C201.953,317.973,199.202,320.729,195.804,320.729z M170.056,225.324c6.788,0,12.298,5.506,12.298,12.298   c0,6.785-5.51,12.298-12.298,12.298c-6.795,0-12.298-5.513-12.298-12.298C157.757,230.83,163.261,225.324,170.056,225.324z    M157.757,196.886c0-6.792,5.503-12.298,12.298-12.298c6.788,0,12.298,5.506,12.298,12.298c0,6.785-5.51,12.298-12.298,12.298   C163.261,209.184,157.757,203.671,157.757,196.886z M170.056,266.061c6.788,0,12.298,5.507,12.298,12.298   c0,6.785-5.51,12.298-12.298,12.298c-6.795,0-12.298-5.513-12.298-12.298C157.757,271.567,163.261,266.061,170.056,266.061z    M210.023,290.656c-6.798,0-12.298-5.513-12.298-12.298c0-6.791,5.5-12.298,12.298-12.298c6.785,0,12.298,5.507,12.298,12.298   C222.321,285.144,216.809,290.656,210.023,290.656z M210.023,249.92c-6.798,0-12.298-5.513-12.298-12.298   c0-6.792,5.5-12.298,12.298-12.298c6.785,0,12.298,5.506,12.298,12.298C222.321,244.407,216.809,249.92,210.023,249.92z    M210.023,209.184c-6.798,0-12.298-5.513-12.298-12.298c0-6.792,5.5-12.298,12.298-12.298c6.785,0,12.298,5.506,12.298,12.298   C222.321,203.671,216.809,209.184,210.023,209.184z M230.007,149.03c0,6.791-5.512,12.298-12.298,12.298h-93.771   c-6.794,0-12.298-5.507-12.298-12.298v-67.81c0-6.794,5.503-12.297,12.298-12.297h93.771c6.786,0,12.298,5.503,12.298,12.297   V149.03z"/>
                            </g>
                       </svg>
                        Отдел продаж
                    </div>
                    <div class="text">
                        <span class="phone">+373 (22) <b>22-55-75</b></span>
                    </div>



                </div>
                <div class="info-wrap ">
                    <div class="title">
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" width="22px" height="22px" x="0px" y="0px" viewBox="0 0 54.757 54.757" style="enable-background:new 0 0 54.757 54.757;" xml:space="preserve">
                            <path d="M40.94,5.617C37.318,1.995,32.502,0,27.38,0c-5.123,0-9.938,1.995-13.56,5.617c-6.703,6.702-7.536,19.312-1.804,26.952  L27.38,54.757L42.721,32.6C48.476,24.929,47.643,12.319,40.94,5.617z M27.557,26c-3.859,0-7-3.141-7-7s3.141-7,7-7s7,3.141,7,7  S31.416,26,27.557,26z"/>
                        </svg>
                        Наш адрес
                    </div>
                    <div class="text">
                        <span>мун. Chisinau, </span>
                        <span>ул. Mitropolitul Gurie Grosu 1 </span>
                        <span class = "email">e-mail  - <a href="#">info@cartus.md</a></span>
                    </div>
                    <div class="title">
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" width="23px" height="23px" viewBox="0 0 341.648 341.648" style="enable-background:new 0 0 341.648 341.648;" xml:space="preserve">
                            <g>
                                <path d="M238.468,40.062c-6.791,0-12.292-5.51-12.292-12.298V12.298C226.176,5.504,220.664,0,213.878,0h-8.202   c-6.798,0-12.298,5.504-12.298,12.298V27.77c0,6.788-5.513,12.298-12.298,12.298h-77.894c-6.794,0-12.298,5.503-12.298,12.298   v276.986c0,6.785,5.503,12.297,12.298,12.297h135.276c6.785,0,12.298-5.512,12.298-12.297V52.359   C250.76,45.57,245.26,40.062,238.468,40.062z M117.79,278.358c0-6.791,5.503-12.298,12.298-12.298   c6.789,0,12.298,5.507,12.298,12.298c0,6.785-5.509,12.298-12.298,12.298C123.293,290.656,117.79,285.144,117.79,278.358z    M130.087,225.324c6.789,0,12.298,5.506,12.298,12.298c0,6.785-5.509,12.298-12.298,12.298c-6.794,0-12.298-5.513-12.298-12.298   C117.79,230.83,123.293,225.324,130.087,225.324z M117.79,196.886c0-6.792,5.503-12.298,12.298-12.298   c6.789,0,12.298,5.506,12.298,12.298c0,6.785-5.509,12.298-12.298,12.298C123.293,209.184,117.79,203.671,117.79,196.886z    M195.804,320.729h-51.5c-3.401,0-6.149-2.75-6.149-6.149c0-3.398,2.748-6.148,6.149-6.148h51.5c3.398,0,6.149,2.75,6.149,6.148   C201.953,317.973,199.202,320.729,195.804,320.729z M170.056,225.324c6.788,0,12.298,5.506,12.298,12.298   c0,6.785-5.51,12.298-12.298,12.298c-6.795,0-12.298-5.513-12.298-12.298C157.757,230.83,163.261,225.324,170.056,225.324z    M157.757,196.886c0-6.792,5.503-12.298,12.298-12.298c6.788,0,12.298,5.506,12.298,12.298c0,6.785-5.51,12.298-12.298,12.298   C163.261,209.184,157.757,203.671,157.757,196.886z M170.056,266.061c6.788,0,12.298,5.507,12.298,12.298   c0,6.785-5.51,12.298-12.298,12.298c-6.795,0-12.298-5.513-12.298-12.298C157.757,271.567,163.261,266.061,170.056,266.061z    M210.023,290.656c-6.798,0-12.298-5.513-12.298-12.298c0-6.791,5.5-12.298,12.298-12.298c6.785,0,12.298,5.507,12.298,12.298   C222.321,285.144,216.809,290.656,210.023,290.656z M210.023,249.92c-6.798,0-12.298-5.513-12.298-12.298   c0-6.792,5.5-12.298,12.298-12.298c6.785,0,12.298,5.506,12.298,12.298C222.321,244.407,216.809,249.92,210.023,249.92z    M210.023,209.184c-6.798,0-12.298-5.513-12.298-12.298c0-6.792,5.5-12.298,12.298-12.298c6.785,0,12.298,5.506,12.298,12.298   C222.321,203.671,216.809,209.184,210.023,209.184z M230.007,149.03c0,6.791-5.512,12.298-12.298,12.298h-93.771   c-6.794,0-12.298-5.507-12.298-12.298v-67.81c0-6.794,5.503-12.297,12.298-12.297h93.771c6.786,0,12.298,5.503,12.298,12.297   V149.03z"/>
                            </g>
                       </svg>
                        Руководство
                    </div>
                    <div class="text">
                        <span class="phone">+373 (22) <b>22-55-75</b></span>
                    </div>
                    <div class="title">
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" width="23px" height="23px" viewBox="0 0 341.648 341.648" style="enable-background:new 0 0 341.648 341.648;" xml:space="preserve">
                            <g>
                                <path d="M238.468,40.062c-6.791,0-12.292-5.51-12.292-12.298V12.298C226.176,5.504,220.664,0,213.878,0h-8.202   c-6.798,0-12.298,5.504-12.298,12.298V27.77c0,6.788-5.513,12.298-12.298,12.298h-77.894c-6.794,0-12.298,5.503-12.298,12.298   v276.986c0,6.785,5.503,12.297,12.298,12.297h135.276c6.785,0,12.298-5.512,12.298-12.297V52.359   C250.76,45.57,245.26,40.062,238.468,40.062z M117.79,278.358c0-6.791,5.503-12.298,12.298-12.298   c6.789,0,12.298,5.507,12.298,12.298c0,6.785-5.509,12.298-12.298,12.298C123.293,290.656,117.79,285.144,117.79,278.358z    M130.087,225.324c6.789,0,12.298,5.506,12.298,12.298c0,6.785-5.509,12.298-12.298,12.298c-6.794,0-12.298-5.513-12.298-12.298   C117.79,230.83,123.293,225.324,130.087,225.324z M117.79,196.886c0-6.792,5.503-12.298,12.298-12.298   c6.789,0,12.298,5.506,12.298,12.298c0,6.785-5.509,12.298-12.298,12.298C123.293,209.184,117.79,203.671,117.79,196.886z    M195.804,320.729h-51.5c-3.401,0-6.149-2.75-6.149-6.149c0-3.398,2.748-6.148,6.149-6.148h51.5c3.398,0,6.149,2.75,6.149,6.148   C201.953,317.973,199.202,320.729,195.804,320.729z M170.056,225.324c6.788,0,12.298,5.506,12.298,12.298   c0,6.785-5.51,12.298-12.298,12.298c-6.795,0-12.298-5.513-12.298-12.298C157.757,230.83,163.261,225.324,170.056,225.324z    M157.757,196.886c0-6.792,5.503-12.298,12.298-12.298c6.788,0,12.298,5.506,12.298,12.298c0,6.785-5.51,12.298-12.298,12.298   C163.261,209.184,157.757,203.671,157.757,196.886z M170.056,266.061c6.788,0,12.298,5.507,12.298,12.298   c0,6.785-5.51,12.298-12.298,12.298c-6.795,0-12.298-5.513-12.298-12.298C157.757,271.567,163.261,266.061,170.056,266.061z    M210.023,290.656c-6.798,0-12.298-5.513-12.298-12.298c0-6.791,5.5-12.298,12.298-12.298c6.785,0,12.298,5.507,12.298,12.298   C222.321,285.144,216.809,290.656,210.023,290.656z M210.023,249.92c-6.798,0-12.298-5.513-12.298-12.298   c0-6.792,5.5-12.298,12.298-12.298c6.785,0,12.298,5.506,12.298,12.298C222.321,244.407,216.809,249.92,210.023,249.92z    M210.023,209.184c-6.798,0-12.298-5.513-12.298-12.298c0-6.792,5.5-12.298,12.298-12.298c6.785,0,12.298,5.506,12.298,12.298   C222.321,203.671,216.809,209.184,210.023,209.184z M230.007,149.03c0,6.791-5.512,12.298-12.298,12.298h-93.771   c-6.794,0-12.298-5.507-12.298-12.298v-67.81c0-6.794,5.503-12.297,12.298-12.297h93.771c6.786,0,12.298,5.503,12.298,12.297   V149.03z"/>
                            </g>
                       </svg>
                        Бухгалтерия
                    </div>
                    <div class="text">
                        <span class="phone">+373 (22) <b>22-55-75</b></span>
                        <span class="phone">+373 (22) <b>73-72-60</b><b style="color:#515151; font-weight: 400;margin-left: 5px">(fax)</b></span>
                    </div>
                    <div class="title">
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" width="23px" height="23px" viewBox="0 0 341.648 341.648" style="enable-background:new 0 0 341.648 341.648;" xml:space="preserve">
                            <g>
                                <path d="M238.468,40.062c-6.791,0-12.292-5.51-12.292-12.298V12.298C226.176,5.504,220.664,0,213.878,0h-8.202   c-6.798,0-12.298,5.504-12.298,12.298V27.77c0,6.788-5.513,12.298-12.298,12.298h-77.894c-6.794,0-12.298,5.503-12.298,12.298   v276.986c0,6.785,5.503,12.297,12.298,12.297h135.276c6.785,0,12.298-5.512,12.298-12.297V52.359   C250.76,45.57,245.26,40.062,238.468,40.062z M117.79,278.358c0-6.791,5.503-12.298,12.298-12.298   c6.789,0,12.298,5.507,12.298,12.298c0,6.785-5.509,12.298-12.298,12.298C123.293,290.656,117.79,285.144,117.79,278.358z    M130.087,225.324c6.789,0,12.298,5.506,12.298,12.298c0,6.785-5.509,12.298-12.298,12.298c-6.794,0-12.298-5.513-12.298-12.298   C117.79,230.83,123.293,225.324,130.087,225.324z M117.79,196.886c0-6.792,5.503-12.298,12.298-12.298   c6.789,0,12.298,5.506,12.298,12.298c0,6.785-5.509,12.298-12.298,12.298C123.293,209.184,117.79,203.671,117.79,196.886z    M195.804,320.729h-51.5c-3.401,0-6.149-2.75-6.149-6.149c0-3.398,2.748-6.148,6.149-6.148h51.5c3.398,0,6.149,2.75,6.149,6.148   C201.953,317.973,199.202,320.729,195.804,320.729z M170.056,225.324c6.788,0,12.298,5.506,12.298,12.298   c0,6.785-5.51,12.298-12.298,12.298c-6.795,0-12.298-5.513-12.298-12.298C157.757,230.83,163.261,225.324,170.056,225.324z    M157.757,196.886c0-6.792,5.503-12.298,12.298-12.298c6.788,0,12.298,5.506,12.298,12.298c0,6.785-5.51,12.298-12.298,12.298   C163.261,209.184,157.757,203.671,157.757,196.886z M170.056,266.061c6.788,0,12.298,5.507,12.298,12.298   c0,6.785-5.51,12.298-12.298,12.298c-6.795,0-12.298-5.513-12.298-12.298C157.757,271.567,163.261,266.061,170.056,266.061z    M210.023,290.656c-6.798,0-12.298-5.513-12.298-12.298c0-6.791,5.5-12.298,12.298-12.298c6.785,0,12.298,5.507,12.298,12.298   C222.321,285.144,216.809,290.656,210.023,290.656z M210.023,249.92c-6.798,0-12.298-5.513-12.298-12.298   c0-6.792,5.5-12.298,12.298-12.298c6.785,0,12.298,5.506,12.298,12.298C222.321,244.407,216.809,249.92,210.023,249.92z    M210.023,209.184c-6.798,0-12.298-5.513-12.298-12.298c0-6.792,5.5-12.298,12.298-12.298c6.785,0,12.298,5.506,12.298,12.298   C222.321,203.671,216.809,209.184,210.023,209.184z M230.007,149.03c0,6.791-5.512,12.298-12.298,12.298h-93.771   c-6.794,0-12.298-5.507-12.298-12.298v-67.81c0-6.794,5.503-12.297,12.298-12.297h93.771c6.786,0,12.298,5.503,12.298,12.297   V149.03z"/>
                            </g>
                       </svg>
                        Отдел продаж
                    </div>
                    <div class="text">
                        <span class="phone">+373 (22) <b>22-55-75</b></span>
                    </div>



                </div>
                <div class="info-wrap   ">
                    <div class="title">
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" width="22px" height="22px" x="0px" y="0px" viewBox="0 0 54.757 54.757" style="enable-background:new 0 0 54.757 54.757;" xml:space="preserve">
                            <path d="M40.94,5.617C37.318,1.995,32.502,0,27.38,0c-5.123,0-9.938,1.995-13.56,5.617c-6.703,6.702-7.536,19.312-1.804,26.952  L27.38,54.757L42.721,32.6C48.476,24.929,47.643,12.319,40.94,5.617z M27.557,26c-3.859,0-7-3.141-7-7s3.141-7,7-7s7,3.141,7,7  S31.416,26,27.557,26z"/>
                        </svg>
                        Наш адрес
                    </div>
                    <div class="text">
                        <span>мун. Chisinau, </span>
                        <span>ул. Mitropolitul Gurie Grosu 1 </span>
                        <span class = "email">e-mail  - <a href="#">info@cartus.md</a></span>
                    </div>
                    <div class="title">
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" width="23px" height="23px" viewBox="0 0 341.648 341.648" style="enable-background:new 0 0 341.648 341.648;" xml:space="preserve">
                            <g>
                                <path d="M238.468,40.062c-6.791,0-12.292-5.51-12.292-12.298V12.298C226.176,5.504,220.664,0,213.878,0h-8.202   c-6.798,0-12.298,5.504-12.298,12.298V27.77c0,6.788-5.513,12.298-12.298,12.298h-77.894c-6.794,0-12.298,5.503-12.298,12.298   v276.986c0,6.785,5.503,12.297,12.298,12.297h135.276c6.785,0,12.298-5.512,12.298-12.297V52.359   C250.76,45.57,245.26,40.062,238.468,40.062z M117.79,278.358c0-6.791,5.503-12.298,12.298-12.298   c6.789,0,12.298,5.507,12.298,12.298c0,6.785-5.509,12.298-12.298,12.298C123.293,290.656,117.79,285.144,117.79,278.358z    M130.087,225.324c6.789,0,12.298,5.506,12.298,12.298c0,6.785-5.509,12.298-12.298,12.298c-6.794,0-12.298-5.513-12.298-12.298   C117.79,230.83,123.293,225.324,130.087,225.324z M117.79,196.886c0-6.792,5.503-12.298,12.298-12.298   c6.789,0,12.298,5.506,12.298,12.298c0,6.785-5.509,12.298-12.298,12.298C123.293,209.184,117.79,203.671,117.79,196.886z    M195.804,320.729h-51.5c-3.401,0-6.149-2.75-6.149-6.149c0-3.398,2.748-6.148,6.149-6.148h51.5c3.398,0,6.149,2.75,6.149,6.148   C201.953,317.973,199.202,320.729,195.804,320.729z M170.056,225.324c6.788,0,12.298,5.506,12.298,12.298   c0,6.785-5.51,12.298-12.298,12.298c-6.795,0-12.298-5.513-12.298-12.298C157.757,230.83,163.261,225.324,170.056,225.324z    M157.757,196.886c0-6.792,5.503-12.298,12.298-12.298c6.788,0,12.298,5.506,12.298,12.298c0,6.785-5.51,12.298-12.298,12.298   C163.261,209.184,157.757,203.671,157.757,196.886z M170.056,266.061c6.788,0,12.298,5.507,12.298,12.298   c0,6.785-5.51,12.298-12.298,12.298c-6.795,0-12.298-5.513-12.298-12.298C157.757,271.567,163.261,266.061,170.056,266.061z    M210.023,290.656c-6.798,0-12.298-5.513-12.298-12.298c0-6.791,5.5-12.298,12.298-12.298c6.785,0,12.298,5.507,12.298,12.298   C222.321,285.144,216.809,290.656,210.023,290.656z M210.023,249.92c-6.798,0-12.298-5.513-12.298-12.298   c0-6.792,5.5-12.298,12.298-12.298c6.785,0,12.298,5.506,12.298,12.298C222.321,244.407,216.809,249.92,210.023,249.92z    M210.023,209.184c-6.798,0-12.298-5.513-12.298-12.298c0-6.792,5.5-12.298,12.298-12.298c6.785,0,12.298,5.506,12.298,12.298   C222.321,203.671,216.809,209.184,210.023,209.184z M230.007,149.03c0,6.791-5.512,12.298-12.298,12.298h-93.771   c-6.794,0-12.298-5.507-12.298-12.298v-67.81c0-6.794,5.503-12.297,12.298-12.297h93.771c6.786,0,12.298,5.503,12.298,12.297   V149.03z"/>
                            </g>
                       </svg>
                        Руководство
                    </div>
                    <div class="text">
                        <span class="phone">+373 (22) <b>22-55-75</b></span>
                    </div>
                    <div class="title">
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" width="23px" height="23px" viewBox="0 0 341.648 341.648" style="enable-background:new 0 0 341.648 341.648;" xml:space="preserve">
                            <g>
                                <path d="M238.468,40.062c-6.791,0-12.292-5.51-12.292-12.298V12.298C226.176,5.504,220.664,0,213.878,0h-8.202   c-6.798,0-12.298,5.504-12.298,12.298V27.77c0,6.788-5.513,12.298-12.298,12.298h-77.894c-6.794,0-12.298,5.503-12.298,12.298   v276.986c0,6.785,5.503,12.297,12.298,12.297h135.276c6.785,0,12.298-5.512,12.298-12.297V52.359   C250.76,45.57,245.26,40.062,238.468,40.062z M117.79,278.358c0-6.791,5.503-12.298,12.298-12.298   c6.789,0,12.298,5.507,12.298,12.298c0,6.785-5.509,12.298-12.298,12.298C123.293,290.656,117.79,285.144,117.79,278.358z    M130.087,225.324c6.789,0,12.298,5.506,12.298,12.298c0,6.785-5.509,12.298-12.298,12.298c-6.794,0-12.298-5.513-12.298-12.298   C117.79,230.83,123.293,225.324,130.087,225.324z M117.79,196.886c0-6.792,5.503-12.298,12.298-12.298   c6.789,0,12.298,5.506,12.298,12.298c0,6.785-5.509,12.298-12.298,12.298C123.293,209.184,117.79,203.671,117.79,196.886z    M195.804,320.729h-51.5c-3.401,0-6.149-2.75-6.149-6.149c0-3.398,2.748-6.148,6.149-6.148h51.5c3.398,0,6.149,2.75,6.149,6.148   C201.953,317.973,199.202,320.729,195.804,320.729z M170.056,225.324c6.788,0,12.298,5.506,12.298,12.298   c0,6.785-5.51,12.298-12.298,12.298c-6.795,0-12.298-5.513-12.298-12.298C157.757,230.83,163.261,225.324,170.056,225.324z    M157.757,196.886c0-6.792,5.503-12.298,12.298-12.298c6.788,0,12.298,5.506,12.298,12.298c0,6.785-5.51,12.298-12.298,12.298   C163.261,209.184,157.757,203.671,157.757,196.886z M170.056,266.061c6.788,0,12.298,5.507,12.298,12.298   c0,6.785-5.51,12.298-12.298,12.298c-6.795,0-12.298-5.513-12.298-12.298C157.757,271.567,163.261,266.061,170.056,266.061z    M210.023,290.656c-6.798,0-12.298-5.513-12.298-12.298c0-6.791,5.5-12.298,12.298-12.298c6.785,0,12.298,5.507,12.298,12.298   C222.321,285.144,216.809,290.656,210.023,290.656z M210.023,249.92c-6.798,0-12.298-5.513-12.298-12.298   c0-6.792,5.5-12.298,12.298-12.298c6.785,0,12.298,5.506,12.298,12.298C222.321,244.407,216.809,249.92,210.023,249.92z    M210.023,209.184c-6.798,0-12.298-5.513-12.298-12.298c0-6.792,5.5-12.298,12.298-12.298c6.785,0,12.298,5.506,12.298,12.298   C222.321,203.671,216.809,209.184,210.023,209.184z M230.007,149.03c0,6.791-5.512,12.298-12.298,12.298h-93.771   c-6.794,0-12.298-5.507-12.298-12.298v-67.81c0-6.794,5.503-12.297,12.298-12.297h93.771c6.786,0,12.298,5.503,12.298,12.297   V149.03z"/>
                            </g>
                       </svg>
                        Бухгалтерия
                    </div>
                    <div class="text">
                        <span class="phone">+373 (22) <b>22-55-75</b></span>
                        <span class="phone">+373 (22) <b>73-72-60</b><b style="color:#515151; font-weight: 400;margin-left: 5px">(fax)</b></span>
                    </div>
                    <div class="title">
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" width="23px" height="23px" viewBox="0 0 341.648 341.648" style="enable-background:new 0 0 341.648 341.648;" xml:space="preserve">
                            <g>
                                <path d="M238.468,40.062c-6.791,0-12.292-5.51-12.292-12.298V12.298C226.176,5.504,220.664,0,213.878,0h-8.202   c-6.798,0-12.298,5.504-12.298,12.298V27.77c0,6.788-5.513,12.298-12.298,12.298h-77.894c-6.794,0-12.298,5.503-12.298,12.298   v276.986c0,6.785,5.503,12.297,12.298,12.297h135.276c6.785,0,12.298-5.512,12.298-12.297V52.359   C250.76,45.57,245.26,40.062,238.468,40.062z M117.79,278.358c0-6.791,5.503-12.298,12.298-12.298   c6.789,0,12.298,5.507,12.298,12.298c0,6.785-5.509,12.298-12.298,12.298C123.293,290.656,117.79,285.144,117.79,278.358z    M130.087,225.324c6.789,0,12.298,5.506,12.298,12.298c0,6.785-5.509,12.298-12.298,12.298c-6.794,0-12.298-5.513-12.298-12.298   C117.79,230.83,123.293,225.324,130.087,225.324z M117.79,196.886c0-6.792,5.503-12.298,12.298-12.298   c6.789,0,12.298,5.506,12.298,12.298c0,6.785-5.509,12.298-12.298,12.298C123.293,209.184,117.79,203.671,117.79,196.886z    M195.804,320.729h-51.5c-3.401,0-6.149-2.75-6.149-6.149c0-3.398,2.748-6.148,6.149-6.148h51.5c3.398,0,6.149,2.75,6.149,6.148   C201.953,317.973,199.202,320.729,195.804,320.729z M170.056,225.324c6.788,0,12.298,5.506,12.298,12.298   c0,6.785-5.51,12.298-12.298,12.298c-6.795,0-12.298-5.513-12.298-12.298C157.757,230.83,163.261,225.324,170.056,225.324z    M157.757,196.886c0-6.792,5.503-12.298,12.298-12.298c6.788,0,12.298,5.506,12.298,12.298c0,6.785-5.51,12.298-12.298,12.298   C163.261,209.184,157.757,203.671,157.757,196.886z M170.056,266.061c6.788,0,12.298,5.507,12.298,12.298   c0,6.785-5.51,12.298-12.298,12.298c-6.795,0-12.298-5.513-12.298-12.298C157.757,271.567,163.261,266.061,170.056,266.061z    M210.023,290.656c-6.798,0-12.298-5.513-12.298-12.298c0-6.791,5.5-12.298,12.298-12.298c6.785,0,12.298,5.507,12.298,12.298   C222.321,285.144,216.809,290.656,210.023,290.656z M210.023,249.92c-6.798,0-12.298-5.513-12.298-12.298   c0-6.792,5.5-12.298,12.298-12.298c6.785,0,12.298,5.506,12.298,12.298C222.321,244.407,216.809,249.92,210.023,249.92z    M210.023,209.184c-6.798,0-12.298-5.513-12.298-12.298c0-6.792,5.5-12.298,12.298-12.298c6.785,0,12.298,5.506,12.298,12.298   C222.321,203.671,216.809,209.184,210.023,209.184z M230.007,149.03c0,6.791-5.512,12.298-12.298,12.298h-93.771   c-6.794,0-12.298-5.507-12.298-12.298v-67.81c0-6.794,5.503-12.297,12.298-12.297h93.771c6.786,0,12.298,5.503,12.298,12.297   V149.03z"/>
                            </g>
                       </svg>
                        Отдел продаж
                    </div>
                    <div class="text">
                        <span class="phone">+373 (22) <b>22-55-75</b></span>
                    </div>



                </div>
            </div>
            <div class="map" id="map"></div>
        </div>

        <div class="container">

            <div class="contactUs">
                <div class="form-title">Напишите нам!</div>
                <form action="">
                    <div class="inputs">
                        <div class="input-wrapper">
                            <div class="v-input">
                                <input type="text"
                                       placeholder="ФИО"
                                       name="feedback_name"
                                >
                                <span class="error" >error</span>
                            </div>
                        </div>
                        <div class="input-wrapper">
                            <div class="v-input">
                                <input type="text"
                                       placeholder="E-mail или телефон"
                                       name="feedback_email"
                                >
                                <span class="error" >error</span>
                            </div>
                        </div>
                    </div>

                    <div class="input-wrapper big">
                        <div class="v-input">
                            <textarea type="text"
                                   placeholder="Ваше сообщение"
                                   name="feedback_desc"
                                   ></textarea>
                            <span class="error" >error</span>
                        </div>
                    </div>
                    <div class="send">
                        <button class="submit">Отправить</button>
                    </div>

                </form>
            </div>
        </div>


    </div>


@stop
@section('script')
    <script>
        window.map;

        function initMap() {
            window.map = new google.maps.Map(document.getElementById('map'), {
                zoom: 14,
                center:pins[0]  ,
                zoomControlOptions: {
                    position: google.maps.ControlPosition.RIGHT_CENTER
                },

                styles:[ { "elementType": "geometry", "stylers": [ { "color": "#f5f5f5" } ] }, { "elementType": "labels.icon", "stylers": [ { "visibility": "off" } ] }, { "elementType": "labels.text.fill", "stylers": [ { "color": "#616161" } ] }, { "elementType": "labels.text.stroke", "stylers": [ { "color": "#f5f5f5" } ] }, { "featureType": "administrative.land_parcel", "elementType": "labels.text.fill", "stylers": [ { "color": "#bdbdbd" } ] }, { "featureType": "poi", "elementType": "geometry", "stylers": [ { "color": "#eeeeee" } ] }, { "featureType": "poi", "elementType": "labels.text.fill", "stylers": [ { "color": "#757575" } ] }, { "featureType": "poi.park", "elementType": "geometry", "stylers": [ { "color": "#e5e5e5" } ] }, { "featureType": "poi.park", "elementType": "labels.text.fill", "stylers": [ { "color": "#9e9e9e" } ] }, { "featureType": "road", "elementType": "geometry", "stylers": [ { "color": "#ffffff" } ] }, { "featureType": "road.arterial", "elementType": "labels.text.fill", "stylers": [ { "color": "#757575" } ] }, { "featureType": "road.highway", "elementType": "geometry", "stylers": [ { "color": "#dadada" } ] }, { "featureType": "road.highway", "elementType": "labels.text.fill", "stylers": [ { "color": "#616161" } ] }, { "featureType": "road.local", "elementType": "labels.text.fill", "stylers": [ { "color": "#9e9e9e" } ] }, { "featureType": "transit.line", "elementType": "geometry", "stylers": [ { "color": "#e5e5e5" } ] }, { "featureType": "transit.station", "elementType": "geometry", "stylers": [ { "color": "#eeeeee" } ] }, { "featureType": "water", "elementType": "geometry", "stylers": [ { "color": "#c9c9c9" } ] }, { "featureType": "water", "elementType": "labels.text.fill", "stylers": [ { "color": "#9e9e9e" } ] } ]
            });
            for(let i = 0 ; i < pins.length ; i++){
                var marker = new google.maps.Marker({
                    position: pins[i],
                    map: window.map,
                    icon:'./img/pin.png'
                });
            }

        }

    </script>
    <script async defer
            src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAXOf1HmzOSuHwhosJoqzs8ES-Z-vf0SiM&callback=initMap">
    </script>
@stop