<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>grxhub_</title>
    <link rel="stylesheet" href="styles/custom.css">
    <link rel="stylesheet" href="styles/x-navbar.css">
    <link rel="stylesheet" href="styles/y-navbar.css">
    <link rel="stylesheet" href="styles/debug.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
    <nav id="x-navbar" class="navbar navbar-expand-lg bg-2 text-center justify-content-between px-3">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="#">Contact</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">About</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="https://github.com">GitHub</a>
            </li>
        </ul>
        <form class="d-flex px-3">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success" type="submit">Search</button>
        </form>
    </nav>

    <nav id="y-navbar" class="navbar-dark bg-dark">
        <div class="title bowlby-one">
            GRXHUB
        </div>
        <script>
            for (let i = 0; i < 15; i++)
            {
                document.write(`
                    <div class="element justify-content-between bg-dark">
                    <div class="left-block d-flex align-items-center mx-2">
                        <img src="assets/images/1-circle.svg"></img>
                        <span>Element</span>
                    </div>
                    <img src="assets/images/chevron-right.svg" class="mx-2"></img>
                    </div>
                `);
            }
        </script>
    </nav>
</body>

</html>