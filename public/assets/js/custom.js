var setFilters = {
		
    init: function(elm){
        
        this.clearForm();
        setFilters.resetSelects();

        var report = elm.options[elm.selectedIndex].value;
        var filters = Array();
        
        switch( report ){
            case '1': 
                filters = Array('filterClass', 'filterPosition', 'filterRating','filterAthlete', 'filterSubmit');
            break;
            case '2': 
                filters = Array('filterState', 'filterClass', 'filterPosition', 'filterRating','filterAthlete', 'filterSubmit');
            break;
            case '3': 
                filters = Array('filterState', 'filterClass', 'filterSubmit','filterAthlete');
            break;
            case '4': 
                filters = Array('filterState', 'filterCityschool', 'filterClass','filterAthlete', 'filterSubmit');
            break;
            case '5': 
                filters = Array('filterClass', 'filterPosition', 'filterRating','filterAthlete', 'filterSubmit');
            break;
            case '6': 
                filters = Array('filterClass', 'filterPosition', 'filterRating','filterAthlete', 'filterSubmit');
            break;
            case '7': 
                filters = Array('filterState', 'filterCityschool', 'filterClass', 'filterRating','filterAthlete', 'filterSubmit');
            break;
        }
        
        this.display(filters);
        
    },
    
    clearForm: function(){
    
        var elms = Array('filterState', 'filterCityschool', 'filterClass', 'filterPosition', 'filterRating', 'filterAthlete', 'filterSubmit');
    
        var num = elms.length;
        for (i=0; i < num; i++){
            elm = document.getElementById(elms[i]);
            elm.style.display = 'none';
        }
    },
    
    resetSelects: function(){
        
        var selects = Array('state','city_school','class','position','rating');
        var select_count = selects.length;
        for( i=0; i<select_count; i++ ){
            document.forms['database'].elements[selects[i]].selectedIndex = 0;
        }
        document.forms['database'].elements['city_school_search'].value = '';
    },
    
    display: function(filters){
        
        var num = filters.length;
        for (i=0; i < num; i++){
            elm = document.getElementById(filters[i]);
            elm.style.display = 'block';
        }
        
    }
    
}

function showSelectReport(){
    var sel = document.getElementById('selectReport');
    //alert('adsf');
    sel.style.display = 'block';
};