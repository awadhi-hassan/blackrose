<div class="p-4">
    <h1 class="text-green-500 text-center py-4 text-3xl font-bold font-montserrat p-4">ABOUT US</h1>
    <p class="font-montserrat px-4 w-3/4 mx-auto text-center text-lg">
        We are a Kenyan company specializing in Engineering, Construction, and Construction Project Management.
        Established in 2018 and formally registered in 2020, we have quickly solidified our position as a leading engineering firm in a
        highly competitive market.
    </p>

    <div class="grid grid-cols-2 gap-20 p-8">
        <div class="ml-20">
            <img class="h-96 w-auto" src="{{asset('storage/pictures/about.png')}}" alt="">
        </div>

        <div class="flex flex-col rounded-xl w-96 p-4">
            <div class="p-2">
                <h2 class="font-bold font-montserrat text-green-500">Vision</h2>
                <p class="font-montserrat ">
                    A regional market leader in provision of civil engineering and building construction services.
                </p>
            </div>

            <div class="p-2">
                <h2 class="font-bold font-montserrat text-green-500">Mission</h2>
                <p class="font-montserrat ">
                    We aim to be a world class engineering construction company providing efficient affordable, sustainable, cost effective
                    services of highest level of quality.
                </p>
            </div>

            <div class="p-2">
                <h2 class="font-bold font-montserrat text-green-500">Core Values</h2>
                <p class="font-montserrat ">
                    We believe in maintaining the highest standard of professionalism, integrity, creativity, positive attitude, delivery that
                    meets and surpass expectations while offering prompt and lasting solutions that stand the test of time.
                </p>
            </div>
        </div>
    </div>

    <h1 class="text-green-500 text-center py-4 text-xl font-bold font-montserrat p-4">A nearshore experience you have never seen before.</h1>
    <p class="font-montserrat px-4 w-3/4 mx-auto text-center text-xl">
        Our commitment to providing exceptional service is underpinned by integrity, innovation, respect, quality, and teamwork.
    </p>

    {{-- <div class="grid grid-cols-3 gap-8 m-6">
        <div class="parent flex flex-col rounded-xl h-48 p-4 overflow-hidden hover:overflow-visible">
            <img class="h-20 w-auto self-center" src="{{asset('storage/icons/team.png')}}" alt="">
            <h1 class="font-bold text-center text-green-500">Team</h1>
            <p class="text-center">
                We comprise of experienced professionals who bring a wealth of knowledge and expertise to every project. We maintain strong
                partnerships with both local and international firms, expanding our capabilities and ensuring we deliver excellence
                consistently.
            </p>
        </div>
        <div class="parent flex flex-col rounded-xl h-48 p-4 overflow-hidden hover:overflow-visible">
            <img class="h-20 w-auto self-center" src="{{asset('storage/icons/resource.png')}}" alt="">
            <h1 class="font-bold text-center text-green-500">Resources</h1>
            <p class="text-center">
                Equipped with state-of-the-art machinery and a commitment to leveraging the latest technologies, we ensure efficient service
                delivery and optimal project outcomes.
            </p>
        </div>
        <div class="parent flex flex-col rounded-xl h-48 p-4 overflow-hidden hover:overflow-visible">
            <img class="h-20 w-auto self-center" src="{{asset('storage/icons/solution.png')}}" alt="">
            <h1 class="font-bold text-center text-green-500">Solutions</h1>
            <p class="text-center">
                We pride ourselves on developing innovative, cost-effective solutions tailored to the local context. By understanding our
                clients' needs and collaborating closely with them, we deliver technically, financially, and environmentally sound solutions.
            </p>
        </div>
    </div>

    <div class="grid grid-cols-3 gap-8 m-6">
        <div class="parent flex flex-col rounded-xl h-48 p-4 overflow-hidden hover:overflow-visible">
            <img class="h-20 w-auto self-center" src="{{asset('storage/icons/action.png')}}" alt="">
            <h1 class="font-bold text-center text-green-500">Local Action</h1>
            <p class="text-center">
                While we think globally, our actions are rooted in the local context. We adapt international best practices to suit local
                requirements, ensuring the success of every project we undertake.
            </p>
        </div>
        <div class="parent flex flex-col rounded-xl h-48 p-4 overflow-hidden hover:overflow-visible">
            <img class="h-20 w-auto self-center" src="{{asset('storage/icons/approach.png')}}" alt="">
            <h1 class="font-bold text-center text-green-500">Approach</h1>
            <p class="text-center">
                Our success stems from the collaborative efforts of our dedicated team, which combines in-house expertise with outsourced
                resources. We prioritize innovation, enabling us to anticipate and meet the evolving needs of our clients.
            </p>
        </div>
        <div class="parent flex flex-col rounded-xl h-48 p-4 overflow-hidden hover:overflow-visible">
            <img class="h-20 w-auto self-center" src="{{asset('storage/icons/getintouch.png')}}" alt="">
            <h1 class="font-bold text-center text-green-500">Get in touch</h1>
            <p class="text-center">
                Partner with Blackrose Investments Limited for unparalleled engineering, construction, and project management solutions. Contact
                us today to discuss your project requirements.
            </p>
        </div>
    </div> --}}

    @php
        $items = [
            [
                'icon' => 'team.png',
                'title' => 'Team',
                'description' => 'We comprise of experienced professionals who bring a wealth of knowledge and expertise to every project. We maintain strong partnerships with both local and international firms, expanding our capabilities and ensuring we deliver excellence consistently.'
            ],
            [
                'icon' => 'resource.png',
                'title' => 'Resources',
                'description' => 'Equipped with state-of-the-art machinery and a commitment to leveraging the latest technologies, we ensure efficient service delivery and optimal project outcomes.'
            ],
            [
                'icon' => 'solution.png',
                'title' => 'Solutions',
                'description' => 'We pride ourselves on developing innovative, cost-effective solutions tailored to the local context. By understanding our clients\' needs and collaborating closely with them, we deliver technically, financially, and environmentally sound solutions.'
            ],
            [
                'icon' => 'action.png',
                'title' => 'Local Action',
                'description' => 'While we think globally, our actions are rooted in the local context. We adapt international best practices to suit local requirements, ensuring the success of every project we undertake.'
            ],
            [
                'icon' => 'approach.png',
                'title' => 'Approach',
                'description' => 'Our success stems from the collaborative efforts of our dedicated team, which combines in-house expertise with outsourced resources. We prioritize innovation, enabling us to anticipate and meet the evolving needs of our clients.'
            ],
            [
                'icon' => 'getintouch.png',
                'title' => 'Get in touch',
                'description' => 'Partner with Blackrose Investments Limited for unparalleled engineering, construction, and project management solutions. Contact us today to discuss your project requirements.'
            ]
        ];

        $values = [
                [
                    'icon' => 'integrity.png',
                    'title' => 'Integrity',
                    'description' => 'We adhere to the highest ethical standards in our interactions at every stage of our projects.'
                ],

                [
                    'icon' => 'innovation.png',
                    'title' => 'Innovation',
                    'description' => 'We seek new ideas and approaches to develop creative solutions for our clients and the industry.'
                ],

                [
                    'icon' => 'quality.png',
                    'title' => 'Quality',
                    'description' => 'We are committed to delivering excellence in everything we do. From project planning to execution.'
                ],

                [
                    'icon' => 'support.png',
                    'title' => 'Teamwork',
                    'description' => 'We believe in the power of teamwork to achieve shared goals and drive collective growth.'
                ]
            ];
    @endphp

    <div class="grid grid-cols-3 gap-8 my-14">
        @foreach($items as $item)
            <div class="parent flex flex-col rounded-xl h-48 p-4 overflow-hidden hover:h-52 duration-700">
                <img class="h-20 w-auto self-center" src="{{ asset('storage/icons/' . $item['icon']) }}" alt="">
                <h1 class="font-bold text-center text-green-500">{{ $item['title'] }}</h1>
                <p class="text-center">{{ $item['description'] }}</p>
            </div>
        @endforeach
    </div>

    <div class="flex justify-around items-center bg-green-200 rounded-xl py-6">
        <div class="ws-1/4">
            <h2 class="font-montserrat font-bold text-5xl">Our <br> Company <br> Values</h2>
        </div>

        <div class="grid grid-cols-2">
           @foreach($values as $value)
                <div class="flex flex-col rounded-xl w-64 p-4">
                    <img class="h-10 w-auto self-center" src="{{ asset('storage/icons/' . $value['icon']) }}" alt="">
                    <h1 class="font-bold text-center">{{ $value['title'] }}</h1>
                    <p class="text-center">{{ $value['description'] }}</p>
                </div>
            @endforeach
        </div>
    </div>

</div>
