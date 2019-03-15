var selected;
$(".r1").on("mouseenter",function()
{
	$(this).addClass("hover");
})
$(".r1").on("mouseleave",function()
{
	$(this).removeClass("hover");
})
$(".r1").on("click",function()
{
	if($(".r1").hasClass("click"))
	{
		$(".r1").removeClass("click");
	}
	$(this).addClass("click");
	selected=$(this).find("td:first").text();
	// alert("Clicked")
})
$("#book").on("click",function()	
{
	selected2=$("#selected");
	selected2.value=selected;
	// alert(selected2);
	window.location.href = "authenticate2.php?choice=" + selected2.value;
})



