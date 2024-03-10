
@props(['name', 'location', 'email', 'phone'])

<a class="address-card " href="#">
    <svg width="32px" height="32px" viewBox="0 0 32 32" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
        <!-- Generator: Sketch 51.3 (57544) - http://www.bohemiancoding.com/sketch -->
        <desc>Created with Sketch.</desc>
        <defs></defs>
        <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd" stroke-linecap="round" stroke-linejoin="round">
            <g id="Artboard-Copy-19" transform="translate(-874.000000, -1729.000000)" stroke-width="1.5">
                <g id="Group-22" transform="translate(0.000000, 1672.000000)">
                    <g id="Group-46" transform="translate(688.000000, 33.000000)">
                        <g id="Group-42" transform="translate(166.000000, 0.000000)">
                            <g id="Group-25" transform="translate(21.000000, 25.000000)">
                                <g id="Group-9" transform="translate(0.000000, 17.666667)">
                                    <path d="M14,8.33306667 L14,12.3330667" id="Stroke-3" stroke="#CD3D73"></path>
                                    <polyline id="Stroke-1" stroke="#666666" points="18 4.33306667 18 12.3330667 10 12.3330667"></polyline>
                                    <polyline id="Stroke-5" stroke="#666666" points="10 5.1332 10 12.3332 2 12.3332 2 6.3332"></polyline>
                                    <polygon id="Stroke-7" stroke="#666666" points="9 6.33306667 14 0.333066667 5 0.333066667 0 6.33306667"></polygon>
                                </g>
                                <path d="M20,23.9997333 L14,17.9997333" id="Stroke-10" stroke="#666666"></path>
                                <g id="Group-15" transform="translate(5.666667, 0.000000)" stroke="#666666">
                                    <polygon id="Stroke-11" points="9.28906667 7.99973333 16.3330667 -0.000266666667 7.33306667 -0.000266666667 0.289066667 7.99973333"></polygon>
                                    <path d="M24.3333333,7.99973333 L16.3333333,-0.000266666667" id="Stroke-13"></path>
                                </g>
                                <path d="M16,6.8148 L16,14.0001333" id="Stroke-16" stroke="#666666"></path>
                                <polyline id="Stroke-17" stroke="#666666" points="28 5.99973333 28 23.9997333 24 23.9997333"></polyline>
                                <path d="M8,13.9997333 L8,7.99973333" id="Stroke-19" stroke="#666666"></path>
                                <path d="M20,8.99973333 L20,9.99973333" id="Stroke-20" stroke="#CD3D73"></path>
                                <path d="M24,8.99973333 L24,9.99973333" id="Stroke-21" stroke="#CD3D73"></path>
                                <path d="M20,13.9997333 L20,14.9997333" id="Stroke-22" stroke="#CD3D73"></path>
                                <path d="M24,13.9997333 L24,14.9997333" id="Stroke-23" stroke="#CD3D73"></path>
                                <path d="M24,18.9997333 L24,19.9997333" id="Stroke-24" stroke="#CD3D73"></path>
                            </g>
                        </g>
                    </g>
                </g>
            </g>
        </g>
    </svg>
    <h3 class="mb-3">{{ $name }}</h3>
    <p class="text-uppercase"><i class="fal fa-map-marker mr-10"></i> {{ $location }}</p>
    <p class="small"><i class="fal fa-envelope mr-10"></i> {{ $email }}</p>
    <p class="small"><i class="fal fa-phone mr-10"></i> {{ $phone }}</p>

    <div class="dimmer"></div>
    <div class="go-corner" href="#">
        <div class="go-arrow">
        →
        </div>
    </div>
</a>
