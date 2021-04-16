let black = $("#black-block");
let img = $("<img/>");
let i = 0;

$('img').each((i, e)=>{
  $(e).attr('onclick', `imgClick(${i})`)
});

function imgClick(index)
{
  i = index;

  black.show(1000).append(
      img.show(1000)
          .attr('src', fotos[index-1])
          .attr('alt', titles[index-1])
          .attr('title', titles[index-1])
  );
}

function clickNext()
{
  if(i < 15)
  {
    i++
    img.hide(300);
    setTimeout(() => imgClick(i), 300);
  }
}

function clickBack()
{
  if(i > 1)
  {
    i--;
    img.hide(300);
    setTimeout(() => imgClick(i), 300);
  }
}

function whiteFunction()
{
  img.hide(1000);
  black.hide(1000);
}