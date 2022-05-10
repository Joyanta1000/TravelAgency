<div>
    <div style="background-color: red; padding: 20px; font-size: 20px; color: white;">

        {{$data['min_price']}}

        <br>

        {{$data['max_price']}}

        <br>
        {{$data['rating']}}
        <br>
        <br>

        @foreach($data['accomodation_type'] as $accomodation_type)
        <div>
            {{$accomodation_type}}
        </div>
        @endforeach

        <br>

        @foreach($data['amenities'] as $amenities)
        <div>
            {{$amenities}}
        </div>
        @endforeach

        <br>

        @foreach($data['host_language'] as $host_language)
        <div>
            {{$host_language}}
        </div>
        @endforeach

        <br>

        {{$data['destination']}}

        <br>

        {{$data['check_in']}}

        <br>

        {{$data['check_out']}}

    </div>
</div>