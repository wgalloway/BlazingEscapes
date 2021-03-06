// Create the monster object
	var monster = {
		// The monster image file and the size of each
		IMAGE: "img/TheSunLogoAn.png",
		SIZE: 99,
		
		// The number of animation frames and the currentFrame
		numberOfFrames: 4,
		currentFrame: 0,
		
		// Properties of the animation cell's X and 
		// Y positions on the title sheet.
		// They're 0 when this object first loads
		sourceX: 0,
		sourceY: 0,
		
		// A variable to control the direction of the loop
		forward: true,
		
		// The monster's updateAnimation method
		updateAnimation: function() {
			// Use the currentFrame to find the correct section of the tilesheet to display
			this.sourceX = this.currentFrame * this.SIZE;
			this.sourceY = 0;
			
			// If the last frame has been reached, set forward to false
			if(this.currentFrame === this.numberOfFrames-1) {
				this.forward = false;
			}
			
			// If the first time has been reached, set forward to true
			if(this.currentFrame === 0) {
				this.forward = true;
			}
		
			// Add 1 to currentFrame if forward is true
			if(this.forward) {
				this.currentFrame++;
			}
			else {
				this.currentFrame--;
			}
		}
	};
	
	// Set up the canvas and drawing surface
	var canvas = document.querySelector("canvas");
	drawingSurface = canvas.getContext("2d");
	
	
	// Load the animation tilesheet
	var image = new Image();
	image.addEventListener("load", loadHandler, false);
	image.src = monster.IMAGE;
	
	function loadHandler() {
		updateAnimation();
	}
	
	function updateAnimation() {
		//Set a timer to call updateAnimation every 250 miliseconds
		setTimeout(updateAnimation, 400);
		
		// Update the monster's animation frames
		monster.updateAnimation();
		
		// Render the animation
		render();
	}
	
	function render() {
		// Clear the canvas of any previous frames
		drawingSurface.clearRect(0, 0, canvas.width, canvas.height);
		
		// Draw the monster's current animation frame
		drawingSurface.drawImage(
			image,
			monster.sourceX, monster.sourceY, monster.SIZE, 196,
			0, 0, monster.SIZE, 196
		);
	}