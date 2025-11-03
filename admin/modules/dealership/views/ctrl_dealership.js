//blank line is required
app.controller("ctrl_dealership", function ($scope, $http) {
  $http.get("login/check_valid_session").success(function (data) {
    if (data != 1) {
      window.location.assign('<?=site_url("login")?>');
    }
  });

  $scope.loader = function () {
    $http.get("dealership/view_data").success(function (data) {
      $scope.datadb = data;
    });
  };

  $scope.loader();

  $scope.delete_data = function (d_id) {
    if (
      confirm("Deleting dealership details may hamper your data associated with it.")
    ) {
      if (confirm("Are you Sure to DELETE ??")) {
        $http.get("dealership/delete_data?d_id=" + d_id).success(function (data) {
          console.log(data);
          if (data == "1") {
            messages(
              "success",
              "Success!",
              "Dealership details Deleted Successfully",
              3000
            );
          } else {
            messages("danger", "Warning!", "Complaint details not Deleted", 4000);
          }
          $scope.loader();
        });
      }
    }
  };
});
