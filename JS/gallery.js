$('.carousel-indicators  li').on('mouseover',function(){
    $this = $(this);
    setTimeout(function(){$this.trigger('click');}, 1000);
})
