

package canvas2;

import java.awt.*;
public class MiCanvas extends Canvas {
    int radio=10;
  public MiCanvas() {
    setBackground(Color.white);
  }
  void setRadio(int radio){
     this.radio=radio;
     repaint();
  }
  public void paint(Graphics g){
    int x1=getSize().width/2;
    int y1=getSize().height/2;
    g.setColor(Color.black);
    g.drawOval(x1-radio, y1-radio, 2*radio, 2*radio);
  }
}
