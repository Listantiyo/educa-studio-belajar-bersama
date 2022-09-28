

<script>
    function scrollToTop() {
        window.scrollTo(0, 0);
    }
	const { createApp } = Vue

    const vues = createApp({
        data() {
            return {
                quest :'',
                quest_most :'',
                quest_unans :'',
                quest_featur :'',
                id  : '',
                first_page_url:'',
                last_page_url:'',
                prev_page_url:'',
                next_page_url:'',
                last_page:'',
                current_page:'',
                path:'',
            }
        },mounted() {
            
            $(document).ready(function (e) {
				// load all question   
                if (page = 1) {                    
                    ajax = $.ajax({
                        url: "/api/quest/show",
                        data: 'id='+1,
                        success: function(rsp){
                            
                            vues.id = rsp.id ;
                            
                            vues.quest = rsp.question_all.data ;
                            vues.first_page_url = rsp.question_all.first_page_url
                            vues.last_page_url = rsp.question_all.last_page_url
                            vues.last_page = rsp.question_all.last_page
                            vues.prev_page_url = rsp.question_all.prev_page_url
                            vues.next_page_url = rsp.question_all.next_page_url
                            vues.current_page = rsp.question_all.current_page
                            vues.path = rsp.question_all.path
                            
                        }
                     }); 
                } 
                 // SearchBar
				$("#searchbar").keypress(function (e) { 
                    
                    if (e.which == 13) {
						e.preventDefault(); 
                        
                        var input = $("#searchbar").val();
                        var id = vues.id;
                        $.get("/api/quest/search", {data:input,id:id},
                            function (rsp) {           

                                vues.id = rsp.id ;

                                if (rsp.id === '1') {
                                vues.quest = rsp.question_all.data ;
                                vues.first_page_url = rsp.question_all.first_page_url
                                vues.last_page_url = rsp.question_all.last_page_url
                                vues.last_page = rsp.question_all.last_page
                                vues.prev_page_url = rsp.question_all.prev_page_url
                                vues.next_page_url = rsp.question_all.next_page_url
                                vues.current_page = rsp.question_all.current_page
                                vues.path = rsp.question_all.path
                                }

                                if (rsp.id === '2') {
                                vues.quest_most = rsp.question_most.data ;
                                vues.first_page_url = rsp.question_most.first_page_url
                                vues.last_page_url = rsp.question_most.last_page_url
                                vues.last_page = rsp.question_most.last_page
                                vues.prev_page_url = rsp.question_most.prev_page_url
                                vues.next_page_url = rsp.question_most.next_page_url
                                vues.current_page = rsp.question_most.current_page
                                vues.path = rsp.question_most.path
                                }

                                if (rsp.id === '3') {
                                vues.quest_unans = rsp.question_unans.data ;
                                vues.first_page_url = rsp.question_unans.first_page_url
                                vues.last_page_url = rsp.question_unans.last_page_url
                                vues.last_page = rsp.question_unans.last_page
                                vues.prev_page_url = rsp.question_unans.prev_page_url
                                vues.next_page_url = rsp.question_unans.next_page_url
                                vues.current_page = rsp.question_unans.current_page
                                vues.path = rsp.question_unans.path   
                                }

                                if (rsp.id === '4') {
                                vues.quest_featur = rsp.question_feature.data ;
                                vues.first_page_url = rsp.question_feature.first_page_url
                                vues.last_page_url = rsp.question_feature.last_page_url
                                vues.last_page = rsp.question_feature.last_page
                                vues.prev_page_url = rsp.question_feature.prev_page_url
                                vues.next_page_url = rsp.question_feature.next_page_url
                                vues.current_page = rsp.question_feature.current_page
                                vues.path = rsp.question_feature.path
                                }

                                $("#searchbar").val(null);

                            },

                        );
                    }
                });
                // search button
                $("#search-button").click(function (e) { 
                    e.preventDefault();

                    var input = $("#searchbar").val();
                        var id = vues.id;
                        $.get("/api/quest/search", {data:input,id:id},
                            function (rsp) {           

                                vues.id = rsp.id ;

                                if (rsp.id === '1') {
                                vues.quest = rsp.question_all.data ;
                                vues.first_page_url = rsp.question_all.first_page_url
                                vues.last_page_url = rsp.question_all.last_page_url
                                vues.last_page = rsp.question_all.last_page
                                vues.prev_page_url = rsp.question_all.prev_page_url
                                vues.next_page_url = rsp.question_all.next_page_url
                                vues.current_page = rsp.question_all.current_page
                                vues.path = rsp.question_all.path
                                }

                                if (rsp.id === '2') {
                                vues.quest_most = rsp.question_most.data ;
                                vues.first_page_url = rsp.question_most.first_page_url
                                vues.last_page_url = rsp.question_most.last_page_url
                                vues.last_page = rsp.question_most.last_page
                                vues.prev_page_url = rsp.question_most.prev_page_url
                                vues.next_page_url = rsp.question_most.next_page_url
                                vues.current_page = rsp.question_most.current_page
                                vues.path = rsp.question_most.path
                                }

                                if (rsp.id === '3') {
                                vues.quest_unans = rsp.question_unans.data ;
                                vues.first_page_url = rsp.question_unans.first_page_url
                                vues.last_page_url = rsp.question_unans.last_page_url
                                vues.last_page = rsp.question_unans.last_page
                                vues.prev_page_url = rsp.question_unans.prev_page_url
                                vues.next_page_url = rsp.question_unans.next_page_url
                                vues.current_page = rsp.question_unans.current_page
                                vues.path = rsp.question_unans.path   
                                }

                                if (rsp.id === '4') {
                                vues.quest_featur = rsp.question_feature.data ;
                                vues.first_page_url = rsp.question_feature.first_page_url
                                vues.last_page_url = rsp.question_feature.last_page_url
                                vues.last_page = rsp.question_feature.last_page
                                vues.prev_page_url = rsp.question_feature.prev_page_url
                                vues.next_page_url = rsp.question_feature.next_page_url
                                vues.current_page = rsp.question_feature.current_page
                                vues.path = rsp.question_feature.path
                                }

                                $("#searchbar").val(null);

                            },

                        );
                    
                });
                // Fillter Community
                $("#fillter-community").change(function (e) { 
                    e.preventDefault();
                    let id_community = $(this).val();
                    let type = vues.id
                    $.get("api/quest/fillter-community", {id_community:id_community,type:type},
                        function (rsp) {

                            vues.id = rsp.id ;

                            if (rsp.id === '1') {
                            vues.quest = rsp.question_all.data ;
                            vues.first_page_url = rsp.question_all.first_page_url
                            vues.last_page_url = rsp.question_all.last_page_url
                            vues.last_page = rsp.question_all.last_page
                            vues.prev_page_url = rsp.question_all.prev_page_url
                            vues.next_page_url = rsp.question_all.next_page_url
                            vues.current_page = rsp.question_all.current_page
                            vues.path = rsp.question_all.path
                        }

                        if (rsp.id === '2') {
                            vues.quest_most = rsp.question_most.data ;
                            vues.first_page_url = rsp.question_most.first_page_url
                            vues.last_page_url = rsp.question_most.last_page_url
                            vues.last_page = rsp.question_most.last_page
                            vues.prev_page_url = rsp.question_most.prev_page_url
                            vues.next_page_url = rsp.question_most.next_page_url
                            vues.current_page = rsp.question_most.current_page
                            vues.path = rsp.question_most.path
                        }

                        if (rsp.id === '3') {
                            vues.quest_unans = rsp.question_unans.data ;
                            vues.first_page_url = rsp.question_unans.first_page_url
                            vues.last_page_url = rsp.question_unans.last_page_url
                            vues.last_page = rsp.question_unans.last_page
                            vues.prev_page_url = rsp.question_unans.prev_page_url
                            vues.next_page_url = rsp.question_unans.next_page_url
                            vues.current_page = rsp.question_unans.current_page
                            vues.path = rsp.question_unans.path   
                        }

                        if (rsp.id === '4') {
                            vues.quest_featur = rsp.question_feature.data ;
                            vues.first_page_url = rsp.question_feature.first_page_url
                            vues.last_page_url = rsp.question_feature.last_page_url
                            vues.last_page = rsp.question_feature.last_page
                            vues.prev_page_url = rsp.question_feature.prev_page_url
                            vues.next_page_url = rsp.question_feature.next_page_url
                            vues.current_page = rsp.question_feature.current_page
                            vues.path = rsp.question_feature.path
                        }

                        },
                    );
                });
            });
            
        },methods: {
			filterQuest(id){
                
				$.ajax({
                    url: "/api/quest/show",
					data:{id:id},
                    success: function(rsp){

                        $('#fillter-community').prop('selectedIndex',0);

                        vues.id = rsp.id ;

                        if (rsp.id === '1') {
                            vues.quest = rsp.question_all.data ;
                            vues.first_page_url = rsp.question_all.first_page_url
                            vues.last_page_url = rsp.question_all.last_page_url
                            vues.last_page = rsp.question_all.last_page
                            vues.prev_page_url = rsp.question_all.prev_page_url
                            vues.next_page_url = rsp.question_all.next_page_url
                            vues.current_page = rsp.question_all.current_page
                            vues.path = rsp.question_all.path
                        }

                        if (rsp.id === '2') {
                            vues.quest_most = rsp.question_most.data ;
                            vues.first_page_url = rsp.question_most.first_page_url
                            vues.last_page_url = rsp.question_most.last_page_url
                            vues.last_page = rsp.question_most.last_page
                            vues.prev_page_url = rsp.question_most.prev_page_url
                            vues.next_page_url = rsp.question_most.next_page_url
                            vues.current_page = rsp.question_most.current_page
                            vues.path = rsp.question_most.path
                        }

                        if (rsp.id === '3') {
                            vues.quest_unans = rsp.question_unans.data ;
                            vues.first_page_url = rsp.question_unans.first_page_url
                            vues.last_page_url = rsp.question_unans.last_page_url
                            vues.last_page = rsp.question_unans.last_page
                            vues.prev_page_url = rsp.question_unans.prev_page_url
                            vues.next_page_url = rsp.question_unans.next_page_url
                            vues.current_page = rsp.question_unans.current_page
                            vues.path = rsp.question_unans.path   
                        }

                        if (rsp.id === '4') {
                            vues.quest_featur = rsp.question_feature.data ;
                            vues.first_page_url = rsp.question_feature.first_page_url
                            vues.last_page_url = rsp.question_feature.last_page_url
                            vues.last_page = rsp.question_feature.last_page
                            vues.prev_page_url = rsp.question_feature.prev_page_url
                            vues.next_page_url = rsp.question_feature.next_page_url
                            vues.current_page = rsp.question_feature.current_page
                            vues.path = rsp.question_feature.path
                        }
                    }
                 }); 
			},
            toAnswer(id){
                $(document).ready(function () {
                    
                    let url = "{{route('questions-details',':id')}}"
                    url = url.replace(':id',id)
                    alert(url)
                    location.href = url;
                });
            },
            copyPath(id){
                alert(id)
                    let Url = "{{route('questions-details',':id')}}"
                    urI = Url.replace(':id',id)
                    alert(urI)
                    setTimeout(async()=>console.log(
                        await window.navigator.clipboard.writeText(urI)), 1000)
            },
            // pagginate button
            pagginate(url){
                console.log(url);
                let type = vues.id
                $.ajax({
                    type: "GET",
                    contentType: "application/json",
                    data:{id:type},
                    dataType: "json",
                    url: url,
                    success: function (rsp) {
                        console.log(rsp);   

                            vues.id = rsp.id ;

                            if (rsp.id === '1') {
                            vues.quest = rsp.question_all.data ;
                            vues.first_page_url = rsp.question_all.first_page_url
                            vues.last_page_url = rsp.question_all.last_page_url
                            vues.last_page = rsp.question_all.last_page
                            vues.prev_page_url = rsp.question_all.prev_page_url
                            vues.next_page_url = rsp.question_all.next_page_url
                            vues.current_page = rsp.question_all.current_page
                            vues.path = rsp.question_all.path
                        }

                        if (rsp.id === '2') {
                            vues.quest_most = rsp.question_most.data ;
                            vues.first_page_url = rsp.question_most.first_page_url
                            vues.last_page_url = rsp.question_most.last_page_url
                            vues.last_page = rsp.question_most.last_page
                            vues.prev_page_url = rsp.question_most.prev_page_url
                            vues.next_page_url = rsp.question_most.next_page_url
                            vues.current_page = rsp.question_most.current_page
                            vues.path = rsp.question_most.path
                        }

                        if (rsp.id === '3') {
                            vues.quest_unans = rsp.question_unans.data ;
                            vues.first_page_url = rsp.question_unans.first_page_url
                            vues.last_page_url = rsp.question_unans.last_page_url
                            vues.last_page = rsp.question_unans.last_page
                            vues.prev_page_url = rsp.question_unans.prev_page_url
                            vues.next_page_url = rsp.question_unans.next_page_url
                            vues.current_page = rsp.question_unans.current_page
                            vues.path = rsp.question_unans.path   
                        }

                        if (rsp.id === '4') {
                            vues.quest_featur = rsp.question_feature.data ;
                            vues.first_page_url = rsp.question_feature.first_page_url
                            vues.last_page_url = rsp.question_feature.last_page_url
                            vues.last_page = rsp.question_feature.last_page
                            vues.prev_page_url = rsp.question_feature.prev_page_url
                            vues.next_page_url = rsp.question_feature.next_page_url
                            vues.current_page = rsp.question_feature.current_page
                            vues.path = rsp.question_feature.path
                        }
                    }
                });
            },
            // search-pagginate
            searchPagginate(url){
                var url = url+'?page='
                let num = $("#search-pagginate").val();
                let type = vues.id
                console.log(url);

                if (num == '') {

                    $("#search-pagginate").val(null);
                    alert("please input number of page")

                }else if(num > vues.last_page){

                    $("#search-pagginate").val(null);
                    alert("your input out of range, the last page is " + vues.last_page)

                }else{                    
                    $.ajax({
                        type: "GET",
                        contentType: "application/json",
                        data:{id:type},
                        dataType: "json",
                        url: url+num,
                        success: function (rsp) {
                            scrollToTop() 
                            console.log(rsp);   

                            vues.id = rsp.id ;

                            if (rsp.id === '1') {
                            vues.quest = rsp.question_all.data ;
                            vues.first_page_url = rsp.question_all.first_page_url
                            vues.last_page_url = rsp.question_all.last_page_url
                            vues.last_page = rsp.question_all.last_page
                            vues.prev_page_url = rsp.question_all.prev_page_url
                            vues.next_page_url = rsp.question_all.next_page_url
                            vues.current_page = rsp.question_all.current_page
                            vues.path = rsp.question_all.path
                        }

                        if (rsp.id === '2') {
                            vues.quest_most = rsp.question_most.data ;
                            vues.first_page_url = rsp.question_most.first_page_url
                            vues.last_page_url = rsp.question_most.last_page_url
                            vues.last_page = rsp.question_most.last_page
                            vues.prev_page_url = rsp.question_most.prev_page_url
                            vues.next_page_url = rsp.question_most.next_page_url
                            vues.current_page = rsp.question_most.current_page
                            vues.path = rsp.question_most.path
                        }

                        if (rsp.id === '3') {
                            vues.quest_unans = rsp.question_unans.data ;
                            vues.first_page_url = rsp.question_unans.first_page_url
                            vues.last_page_url = rsp.question_unans.last_page_url
                            vues.last_page = rsp.question_unans.last_page
                            vues.prev_page_url = rsp.question_unans.prev_page_url
                            vues.next_page_url = rsp.question_unans.next_page_url
                            vues.current_page = rsp.question_unans.current_page
                            vues.path = rsp.question_unans.path   
                        }

                        if (rsp.id === '4') {
                            vues.quest_featur = rsp.question_feature.data ;
                            vues.first_page_url = rsp.question_feature.first_page_url
                            vues.last_page_url = rsp.question_feature.last_page_url
                            vues.last_page = rsp.question_feature.last_page
                            vues.prev_page_url = rsp.question_feature.prev_page_url
                            vues.next_page_url = rsp.question_feature.next_page_url
                            vues.current_page = rsp.question_feature.current_page
                            vues.path = rsp.question_feature.path
                        }
                            $("#search-pagginate").val(null);
                        }
                    });
                }
            },
        },
    }).mount('#app') 
</script>

