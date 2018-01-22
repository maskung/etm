#include <stdio.h>
#include <stdlib.h>
#include <wiringPi.h>
#include<string.h>


// LED Pin - wiringPi pin 0 is BCM_GPIO 17.
// LED Pin - wiringPi pin 1 is BCM_GPIO ?.

#define	LED_L	0
#define	LED_R	1

int main (void)

{ char key=0;

  printf ("Raspberry Pi blink\n") ;

  wiringPiSetup () ;
  pinMode (LED_L, OUTPUT) ;
  pinMode (LED_R, OUTPUT) ;
  digitalWrite (LED_L, LOW) ;	// Off
  digitalWrite (LED_R, LOW) ;	// Off
  
  for (;;)
  {
    
    key = getchar();
   
    switch (key)
    {
	case 'w':
	case 'W':
		 printf("Go\n");
		 digitalWrite (LED_L, HIGH) ;	// On
		 digitalWrite (LED_R, HIGH) ;	// On
	         delay (1000) ;		// mS
		 break;
	case 'a':
	case 'A':
		 printf("Left\n");
		 digitalWrite (LED_L, LOW) ;	// On
		 digitalWrite (LED_R, HIGH) ;	// On
	         delay (500) ;		// mS
		 break;
	case 'd':
	case 'D':
		 printf("Right\n");
		 digitalWrite (LED_L, HIGH) ;	// On
		 digitalWrite (LED_R, LOW) ;	// On
	         delay (500) ;		// mS
		 break;
	case 's':
	case 'S':
		 printf("Stop\n");
		 digitalWrite (LED_L, LOW) ;	// Off
		 digitalWrite (LED_R, LOW) ;	// Off
	         //delay (200) ;		// mS
		 break;
	
	default: 
		digitalWrite (LED_L, LOW) ;	// Off
	    	digitalWrite (LED_R, LOW) ;	// Off
    }
    printf("---\n");
  }
  return 0 ;
}

