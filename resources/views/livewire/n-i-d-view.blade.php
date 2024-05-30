<div class="w-dvw h-dvh flex flex-col justify-center items-center" style="background-color: #252525;">
    <style>
        /* width */
        ::-webkit-scrollbar {
            width: 20px;
        }

        /* Track */
        ::-webkit-scrollbar-track {
            background: #625D57;
        }

        /* Handle */
        ::-webkit-scrollbar-thumb {
            background: #252525;
            border-radius: 5px;
        }

        /* Handle on hover */
        ::-webkit-scrollbar-thumb:hover {
            background: #252525;
        }

        .s_result {
            height: 11rem;
        }

        .outer-div {
            margin-top: 1rem;
            background-color: #625D57;
            width: 75vw;
            height: 22vh;
        }

        .input-field {
            margin-top: 30vh;
            width: 75vw;
        }

        .footer {
            color: #625D57;
            font-size: larger;
            font-weight: 600;
        }

        @media only screen and (max-width: 1024px) {
            .outer-div {
                height: 32vh;
            }

            .footer {
                margin-bottom: 1vw;
            }
        }

        @media only screen and (min-width: 320px) {
            .outer-div {
                height: 41vh;
            }
        }
    </style>

    <!-- This is the Input Field -->
    <input class="input-field text-white rounded-md text-center" placeholder="Please enter Search Param" type="text" wire:model.blur="nid" style="background-color: #625D57;" />

    <!-- This is the OutPut Field -->
    <div class="rounded-xl outer-div justify-center items-center">
        <div class="flex flex-row justify-center text-center rounded items-center mt-2 overflow-y-scroll s_result">
            @if(isset($nids))
            <div class="text-white text-center text-xl  font-semibold" style="background-color: #625D57;">
                @foreach($nids as $nid)
                <p>{{ $nid->id_number }}</p>
                <p>{{ $nid->full_name }}</p>
                <p>{{ $nid->address }}</p>
                <p>{{ $nid->date_of_birth }}</p>
                <br>
                @endforeach
            </div>
            @endif
        </div>
    </div>
    <div class="footer mt-auto">
        <p>
            Created By N3RD
        </p>
    </div>
</div>
