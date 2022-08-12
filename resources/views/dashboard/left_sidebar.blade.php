<div class="col-lg-2">
    <div class="align-items-center">
        <h5 class="d-inline ms-4">Mapel</h5>
        <a class="d-inline ms-5">
            <i class="fa-solid fa-gear fs-5"></i>
        </a>
    </div>
    <hr>
    <div id="app" class="d-flex align-items-start ms-1">
        <div class="nav flex-column questions-tab nav-pills" id="myTab" role="tablist" aria-orientation="vertical">
            
            <button class="nav-link active font-bold" id="matematika-question-tab" data-bs-toggle="tab" data-bs-target="#matematika-question" type="button" role="tab" aria-controls="matematika-question" aria-selected="true" value="">
                <i class="fa-solid fa-calculator pe-2"></i>
                Matematika
            </button>
            @foreach ($film as $mapel)              
                <button class="nav-link" id="question-tab" data-bs-toggle="tab" data-bs-target="#question-data" type="button" role="tab" aria-controls="question-data" aria-selected="false" value="{{$mapel->id}}">
                    {{$mapel->nama_mapel}}
                </button>
            @endforeach
        <div>@{{ma}}</div>
        </div>
    </div>
</div>
@push('scripts')
<script src="https://unpkg.com/vue@3"></script>
<script>
    const { createApp } = Vue

    const vues = createApp({
        data() {
            return {
                ma :'',
            }
        },mounted() {

        },
    }).mount('#app')

    $(document).ready(function(){
        vues.ma  = $("button").val();
    });
    $("button").click(function (e) { 
        // e.preventDefault();
        vues.ma = $(this).val();

        $.ajax({
                url: '/data/q',
                type: 'post',
                dataType: 'application/json',
                data: vues.ma,
                success: function(rsp) {
                    console.log(rsp);
                    if(rsp.status == 200){
                        console.log("im here?");
                        appComponent.products.push(rsp.data);
                    }
                   console.log(rsp);
                }
        });
    });
    // $(vues.ma).ready(function(e) {
    //     //prevent Default functionality
    //     e.preventDefault();

    //     var data = vues.ma;
    //     //do your own request an handle the results

    // });

    
</script>
@endpush
