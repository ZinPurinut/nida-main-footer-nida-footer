@if(config('nida-footer.enabled'))
<link rel='stylesheet' href='{{ asset('vendor/nida-footer/css/footer.css') }}' type='text/css' media='all' />

<div class="gb-container gb-container-926e20d5 alignfull">
    <div class="gb-container gb-container-b3f396ac">
        <div class="gb-inside-container">
            <h2 class="gb-headline gb-headline-1e72df33 gb-headline-text">
                <strong>
                    <a href="https://sdgs.nida.ac.th/home/" target="_blank" rel="noopener noreferrer">
                        การพัฒนาที่ยั่งยืน Sustainable Development
                    </a>
                </strong>
            </h2>
        </div>
    </div>

    <div class="gb-container gb-container-9d55488e">
        <div class="gb-grid-wrapper gb-grid-wrapper-3bc7ec98">
            {{-- Column 1: คณะ --}}
            @include('nida-footer::partials.column-faculty')

            {{-- Column 2: สำนักงานอธิการบดี --}}
            @include('nida-footer::partials.column-president-office')

            {{-- Column 3: สำนักงานสภาสถาบัน --}}
            @include('nida-footer::partials.column-council-office')

            {{-- Column 4: อื่นๆ --}}
            @include('nida-footer::partials.column-others')
        </div>
    </div>
</div>
@endif