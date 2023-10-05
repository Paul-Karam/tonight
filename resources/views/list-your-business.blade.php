@extends('layouts.app')
@section('content')

<div class="send-request">
    <h3>send a request</h3>
    <form action="">
        <div class="form-row">
            <input type="text" name="" id="" placeholder="Business Name">
            <div class="select">
                <select name="" id="">
                    <option selected class="country">Category</option>
                </select>
                <i class="fa-solid fa-sort-down"></i>
            </div>
        </div>
        <div class="form-row">
            <input type="text" name="" id="" placeholder="First Name">
            <input type="text" placeholder="Last Name">
        </div>
        <div class="form-row">
            <input type="email" name="" id="" placeholder="Email Address">
            <input id="phone" name="phone" type="tel" placeholder="Phone Number">
        </div>
        <div class="form-row">
            <div class="select">
                <select name="" id="">
                    <option selected class="country">Country</option>
                </select>
                <i class="fa-solid fa-sort-down"></i>
            </div>
            <div class="select">
                <select name="" id="">
                    <option selected class="country">City</option>
                </select>
                <i class="fa-solid fa-sort-down"></i>
            </div>
        </div>
        <div class="form-row2">
            <input type="text" placeholder="Address">
        </div>
        <div class="form-row">
            <div class="menu-url">
                <input type="text" placeholder="Menu Url">
            </div>
            <div class="form-row">
                <div class="file-list" id="fileList1">
                    <h6>Attach Logo</h6>
                </div>
                <i class="fa-solid fa-paperclip" id="fileInputTrigger1" style="color: #00ADDE; cursor: pointer;"></i>
                <input type="file" class="input" id="fileInput1" style="display: none;" accept=".png">
            </div>
        </div>
        <div class="submit-btn">
            <button>Submit</button>
        </div>
    </form>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        var input = document.querySelector('[name="phone"]');
        var iti = window.intlTelInput(input, {
            preferredCountries: ['lb'],
            utilsScript: 'https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/utils.js',
        });
    });
</script>
<script>
    // Get references to the elements
    const fileList1 = document.getElementById('fileList1');
    const fileInputTrigger1 = document.getElementById('fileInputTrigger1');
    const fileInput1 = document.getElementById('fileInput1');

    // Add a click event listener to the paperclip icon
    fileInputTrigger1.addEventListener('click', () => {
        // Trigger the hidden file input when the icon is clicked
        fileInput1.click();
    });

    // Add an event listener to the file input to handle selected files
    fileInput1.addEventListener('change', () => {
        // Get the selected files
        const selectedFiles = fileInput1.files;

        // Create an array to store the names of selected files
        const fileNames1 = [];

        // Extract file names and add them to the array
        for (let i = 0; i < selectedFiles.length; i++) {
            fileNames1.push(selectedFiles[i].name);
        }

        // Clear the file list
        fileList1.innerHTML = '';

        // Create <p> tags for each file name and append them to the file list
        fileNames1.forEach(fileName1 => {
            const pTag = document.createElement('p');
            pTag.textContent = fileName1;
            fileList1.appendChild(pTag);
        });
    });
</script>

@endsection