<?PHP

if (!empty($_POST['delete'])) {
  $deletions = $_POST['delete'];
  if ($deletion_count = deleteUsers($deletions)) {
    $successes[] = lang("ACCOUNT_DELETIONS_SUCCESSFUL", array($deletion_count));
  }
  else {
    $errors[] = lang("SQL_ERROR");
  }
}
$_SESSION["userCakeSuccesses"] = $successes;
$_SESSION["userCakeErrors"] = $errors;
kickBack('','amn/ucusers', '');
exit;


?>