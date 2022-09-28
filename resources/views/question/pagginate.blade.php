        {{-- pagginate --}}
        <div class="col-12 px-5 pt-5">
            <div class="pagination-area mt-0 row">
                <a 
                    href="#"  
                    class="col-2 text-center" 
                    style="border: 1px solid #eeeeee;height:2rem ;padding: 0.25rem!important;"
                    @click="pagginate(first_page_url)"
                >
                    First
                </a>

                <a 
                    href="#" 
                    class="col-1 ms-1 text-center" 
                    style="border: 1px solid #eeeeee;height:2rem ;padding: 0.25rem!important;"
                    @click="pagginate(prev_page_url)"
                    >
                    <i class="ri-arrow-left-line"></i>
                </a>

                <div class="col d-flex">
                    <input type="text" id="search-pagginate" class="text-center" :placeholder="current_page +' of '+ last_page" 
                        style="border: 1px solid #eeeeee; height:2rem; width:auto;">
                    <button 
                        @click="searchPagginate(path)"
                        type="text" class="" style="border: 1px solid #eeeeee; height:2rem; width:100%;" >
                        <b>GO</b>
                    </button>
                </div>

                <a 
                    href="#"  
                    class="col-1 me-1 text-center"
                    style="border: 1px solid #eeeeee;height:2rem;padding: 0.25rem!important;"
                    @click="pagginate(next_page_url)"
                    >
                    <i class="ri-arrow-right-line"></i>
                </a>
                <a 
                    href="#" 
                    class="col-2 text-center"
                    style="border: 1px solid #eeeeee;height:2rem;padding: 0.25rem!important;"
                    @click="pagginate(last_page_url)"
                    >
                    Last
                </a>
            </div>
        </div>