<x-backend.layouts.master>
    <div class="container mt-5">
        <label for="year_select">Year: </label>
        <select type="string" name="year_select" class="form-control" id="year_select">
            @foreach (yearDropDown(4) as $year)
            <option value="{{ $year }}">{{ $year }}</option>
            @endforeach
        </select>
        <br>
        <div style="width: 100%; border: 1px solid black;" class="mb-2">
        <a id="1st" href="{{ route('year-result', ['course_year'=>'1st', 'year'=>date('Y')]) }}" style="text-decoration:none; color:black;"><h2 class="mb-3 ps-2">1st Year</h2></a>
       {{--<select class="form-select form-select-lg mb-3" aria-label=".form-select-lg example" onchange="location = this.value;">
            <option selected>Select Section</option>
            <option value="{{ route('year-result', ['course_year'=>'1st', 'year'=>'2022']) }}">A section</option>
            
        </select>--}}
        </div>

        <div style="width: 100%; border: 1px solid black;" class="mb-2">
        <a id="2nd" href="{{ route('year-result', ['course_year'=>'2nd', 'year'=>date('Y')]) }}" style="text-decoration:none; color:black;"><h2 class="mb-3 ps-2">2nd Year</h2></a>
       {{--<select class="form-select form-select-lg mb-3" aria-label=".form-select-lg example" onchange="location = this.value;">
            <option selected>Select Section</option>
            <option value="{{ route('year-result', ['course_year'=>'1st']) }}">A section</option>
            
        </select>--}}
        </div>

        <div style="width: 100%; border: 1px solid black;" class="mb-2">
        <a id="3rd" href="{{ route('year-result', ['course_year'=>'3rd', 'year'=>date('Y')]) }}" style="text-decoration:none; color:black;"><h2 class="mb-3 ps-2">3rd Year</h2></a>
       {{--<select class="form-select form-select-lg mb-3" aria-label=".form-select-lg example" onchange="location = this.value;">
            <option selected>Select Section</option>
            <option value="{{ route('year-result', ['course_year'=>'1st']) }}">A section</option>
            
        </select>--}}
        </div>
    </div>

    <script>
        $("#year_select").on('change', ()=> {
            let year_select = $("#year_select").val();
            $("#1st").attr('href', `/admin/year-result/1st/${year_select}`);
            $("#2nd").attr('href', `/admin/year-result/2nd/${year_select}`);
            $("#3rd").attr('href', `/admin/year-result/3rd/${year_select}`);
        });
    </script>
</x-backend.layouts.master>