// JavaScript Document
function ConfirmDelete()
{
  var id = confirm("Are you sure you want to delete?");
  if (id)
      return true;
  else
    return false;
}