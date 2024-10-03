<?php 
    function createButton($name, $value) {
        return '
            <button 
                name="' . $name . '" 
                type="submit\" 
                class="
                    block w-fit mx-auto px-4 py-2 
                    rounded border border-gray-300 
                    transition-all 
                    hover:shadow-md hover:-translate-y-0.5\"
                >
                '. $value . '
            </button>
        ';
    }
?>
