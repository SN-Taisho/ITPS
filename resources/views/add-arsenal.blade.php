<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arsenal</title>

    <link href="{{ asset('css/styles.css') }}" rel="stylesheet">
</head>

<body>

    <h1>Arsenal Test</h1>

    <form id="arsenal-lane" action="/students/{{$userDetails['id']}}/equipments/create" method="POST" enctype="multipart/form-data">
        @csrf
        <div>
            <div style="margin: auto;">
                <label>
                    Tournament
                </label>
                <input type="text" name="tournament">
            </div>

            <div style="margin: auto;"><label>Date
                </label>
                <input type="text" name="date">
            </div>

        </div>

        <h2>Oil pattern analysis</h2>
        <div>
            <label class="group-label">Oiling Length</label>

            <input type="radio" name="oiling_lenght" value="40ft"><label>&lt;40ft</label>
            <input type="radio" name="oiling_lenght" value="40-44ft"> <label> 40-44ft</label>
            <input type="radio" name="oiling_lenght" value="40-44ft"> <label>&gt;44ft</label>
            <input type="text" name="remarks" placeholder="Remarks">

        </div>


        <section id="arsenal-lane-details">
            <div>
                <h2>Across the lane</h2>

                <div class="form-block">
                    <label class="group-label">Centre</label>

                    <div>
                        <input type="radio" name="atl_centre" value="heavy"><label>Heavy</label>
                        <input type="radio" name="atl_centre" value="medium"><label>Medium</label>
                        <input type="radio" name="atl_centre" value="light"><label>Light</label>
                    </div>
                </div>
                <div class="form-block">
                    <label class="group-label">Track</label>

                    <div>
                        <input type="radio" name="atl_track" value="heavy"><label>Heavy</label>
                        <input type="radio" name="atl_track" value="medium"> <label>Medium</label>
                        <input type="radio" name="atl_track" value="light"> <label>Light</label>
                    </div>
                </div>
                <div class="form-block">
                    <label class="group-label">Outisde</label>

                    <div>
                        <input type="radio" name="atl_outside" value="heavy"><label>Heavy</label>
                        <input type="radio" name="atl_outside" value="medium"> <label>Medium</label>
                        <input type="radio" name="atl_outside" value="light"> <label>Light</label>
                    </div>
                </div>


                <h2>Back to front</h2>
                <div class="form-block">
                    <label class="group-label">Back (Traction)</label>

                    <div>
                        <input type="radio" name="btf_back" value="light"><label>Light</label>
                        <input type="radio" name="btf_back" value="medium"><label>Medium</label>
                        <input type="radio" name="btf_back" value="heavy"><label>Heavy</label>
                    </div>
                </div>
                <div class="form-block">
                    <label class="group-label">Middle</label>

                    <div>
                        <input type="radio" name="btf_middle" value="light"> <label>Light</label>
                        <input type="radio" name="btf_middle" value="medium"> <label>Medium</label>
                        <input type="radio" name="btf_middle" value="heavy"><label>Heavy</label>
                    </div>
                </div>
                <div class="form-block">

                    <label class="group-label">Front</label>

                    <div class="form-group">
                        <input type="radio" name="btf_front" value="light"><label>Light</label>
                        <input type="radio" name="btf_front" value="medium"><label>Medium</label>
                        <input type="radio" name="btf_front" value="heavy"><label>Heavy</label>
                    </div>
                </div>

                <div>
                    <label>Upload an Image</label> <input type="file" id="arsenal-file-input" name="img">
                </div>

            </div>

            <div id="arsenal-image-upload">
                <div id="image-wrapper"><img id="image-preview" src="#"></div>
            </div>

            <script>
                const imageInput = document.getElementById('arsenal-file-input');
                const imagePreview = document.getElementById('image-preview');

                imageInput.addEventListener('change', (event) => {
                    const file = event.target.files[0];
                    const reader = new FileReader();

                    reader.onload = (event) => {
                        imagePreview.src = event.target.result;
                        imagePreview.style.display = 'block';
                    };

                    reader.readAsDataURL(file);
                });
            </script>
        </section>


        <h2>Surface Preparation</h2>
        <div id="surface-prep">
            <label class="group-label">Sanding</label>

            <input type="radio" name="sanding" value="180"><label>180</label>
            <input type="radio" name="sanding" value="360"> <label>360</label>
            <input type="radio" name="sanding" value="500"> <label>500</label>
            <input type="radio" name="sanding" value="1000"> <label>1000</label>
            <input type="radio" name="sanding" value="2000"> <label>2000</label>
            <input type="radio" name="sanding" value="3000"> <label>3000</label>
            <input type="radio" name="sanding" value="4000"> <label>4000</label>

            <input type="radio" name="sanding"><input type="text" style="width: 70px;">

        </div>

        <div>
            <label>
                Polishing
            </label>
            <input type="text" value="Smooth" name="polishing" style="width: 100%;">

        </div>

        <button type="submit" class="save">Save Record</button>

    </form>

</body>

</html>