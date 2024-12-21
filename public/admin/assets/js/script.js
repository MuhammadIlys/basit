document.addEventListener("DOMContentLoaded", function () {
    // Select all textareas with the 'summernote' class
    const summernoteElements = document.querySelectorAll('.summernote');
    
    // Initialize Summernote for each element
    summernoteElements.forEach(function (element) {
        $(element).summernote({
            height: 300,  // Set height of the editor
            toolbar: [
                // Style button (bold, italic, underline, etc.)
                ['style', ['bold', 'italic', 'underline', 'clear']],
                
                // Font family, font size, and font color dropdowns
                ['font', ['fontname', 'fontsize', 'color']],
                
                // Header options (H1, H2, Paragraph)
                ['para', ['ul', 'ol', 'paragraph', 'height']],
                
                // Insert options (link, image, video, etc.)
                ['insert', ['link', 'picture', 'video']],
                
                // View options (fullscreen, code view, etc.)
                ['view', ['fullscreen', 'codeview', 'help']]
            ],
            fontSizes: ['8', '10', '12', '14', '16', '18', '20', '24', '28', '32', '36'],  // Custom font sizes
            fontNames: ['Arial', 'Verdana', 'Times New Roman', 'Georgia', 'Courier New'],  // Custom font families
            focus: true  // Focus on the editor when initialized
        });
    });
});