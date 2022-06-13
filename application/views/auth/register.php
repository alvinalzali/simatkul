<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

    <section class="h-100 h-custom" style="background-color: #1A1A1A;">
        <div class="container py-5 h-100">
          <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-lg-8 col-xl-6">
                <div class="card rounded-3">
                  <img  src="img/Rancamaya Icon.png" alt height="200">
                <div class="card-body p-4 p-md-5">
                  <h3 class="mb-4 pb-2 pb-md-0 mb-md-5 px-md-2">Registration Info</h3>
      
                  <form class="px-md-2">
      
                    <div class="form-outline mb-4">
                        <label class="form-label" for="form3Example1q">Name</label>
                      <input type="text" id="form3Example1q" class="form-control" />
                    </div>
                    <div class="form-outline mb-4">
                        <label class="form-label" for="form3Example1q">Email</label>
                      <input type="text" id="form3Example1q" class="form-control" />
                    </div>
                    <div class="form-outline mb-4">
                        <label class="form-label" for="form3Example1q">Password</label>
                      <input type="text" id="form3Example1q" class="form-control" />
                    </div>
                    <div class="form-outline mb-4">
                        <label class="form-label" for="form3Example1q">Re-Password</label>
                      <input type="password" class="form-control form-control-user" id="password2" name="password2" placeholder="Repeat Password">
                    </div>
      
                    <button type="submit" value="Submit" class="btn btn-warning btn-lg mb-1">Submit</button>
      
                  </form>
                  <hr>
                  <p class="text-center">Already have account? 
                      <a class="small" href="<?= base_url('auth'); ?>">Login here."</a>
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

</body>
</html>
